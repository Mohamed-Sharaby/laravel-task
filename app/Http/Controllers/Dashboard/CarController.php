<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\CarsDataTable;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:View', ['only' => ['index']]);
        $this->middleware('permission:Create', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete', ['only' => ['destroy']]);
    }


    public function index(CarsDataTable $dataTable)
    {
        return $dataTable->render('dashboard.cars.index');
    }


    public function create()
    {
        return view('dashboard.cars.create');
    }


    public function store(CarRequest $request)
    {
        Car::create($request->validated());
        return redirect(route('cars.index'))->with('success', 'Car Added Successfully');
    }


    public function edit(Car $car)
    {
        return view('dashboard.cars.edit', ['car' => $car]);
    }


    public function update(CarRequest $request, Car $car)
    {
        $car->update($request->validated());
        if ($request->image) {
            if ($car->image) {
                $image = str_replace(url('/') . '/storage/uploads/', '', $car->image);
                deleteImage('uploads', $image);
            }
        }
        return redirect(route('cars.index'))->with('success', 'Car Updated Successfully');
    }


    public function destroy(Car $car)
    {
        $car->delete();
        return 'Done';
    }
}
