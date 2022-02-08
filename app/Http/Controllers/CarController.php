<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $car = Car::create([
            'car_name' => $request->car_name,
            'automaker' => $request->automaker,
            'number_of_available_cars' => $request->number_of_available_cars,
            'in_stock' => $request->number_of_available_cars == 0 ? false : true,
        ]);

        return $car;
    }
}
