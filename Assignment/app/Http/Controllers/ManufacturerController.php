<?php

namespace App\Http\Controllers;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('manufacturer.index', compact('manufacturers'));
    }
}
