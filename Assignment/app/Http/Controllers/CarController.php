<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Manufacturer;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $manufacturer = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufacturer', '');
        if (request('manufacturer_id') == null) {
            $cars = Car::all();
        } else {
            $cars = Car::where('manufacturer_id', request('manufacturer_id'))->get();
        }
        return view('cars.index', compact('cars', 'manufacturer'));
    }
    public function create() 
    {
        $cars = new Car();
        $manufacturer = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Cars', '');
        return view('cars.create', compact('cars', 'manufacturer'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => 'required|exists:manufacturers,id'
        ]);
        Car::create($request->all());
        return redirect()->route('cars.index');
    }

    public function show($id) 
    {
        $cars = Car::find($id);
        return view('cars.show', compact('cars'));
    }

    public function edit($id)
    {
        $cars = Car::find($id);
        $manufacturer = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        return view('cars.edit', compact('manufacturer', 'cars'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => 'required|exists:manufacturers,id'
        ]);

        $cars = Car::find($id);
        $cars->update($request->all());
        return redirect()->route('cars.index');
    }
    public function delete ($id)
    {
        $cars = Car::find($id);
        $cars->delete();
        return back();
    }
}
