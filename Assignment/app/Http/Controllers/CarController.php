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
}
