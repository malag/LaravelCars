<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        return view('cars', [
            'title' => 'Cars',
            'cars' => Car::latest()->filter(request())->paginate(5)
        ]);        
    }

    public function show(Car $car)
    {
        return view('car', [
        
            'car' => $car
        ]);

    }

    public function create()
    {
        return view('car-create');

    }
  
    public function save(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'year' => 'required',
            'model' => 'required',
            'price' => 'required',
        ]);

        if($request->hasFile('logo'))
        {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        Car::create($formFields);

        return redirect('/cars')->with('message', 'Car created successfully!');
    }
    
    public function update(Request $request, Car $car) 
    {
       
        $formFields = $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'year' => 'required',
            'model' => 'required',
            'price' => 'required',
        ]);

        if($request->hasFile('logo'))
        {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $car->update($formFields);

        return redirect('/cars')->with('message', 'Car updated successfully!');
    }

    public function edit(Car $car)
    {
        return view('car-edit', ['car' => $car]);

    }
    
    public function destroy(Car $car)
    {
          $car->delete();
          return redirect('/cars')->with('message', 'Car deleted successfully!');
    }

}
