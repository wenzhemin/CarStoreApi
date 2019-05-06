<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Car;
use App\Http\Resources\Car as CarResource;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate(15);
        return CarResource::collection($cars);
    }

    // get by model_id
    public function getByModel($model_id)
    {
        $cars = Car::where('model_id', $model_id)->get();
        return CarResource::collection($cars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = $request->isMethod('put') ? Car::findOrFail
        ($request->id) : new Car;

        $car->id = $request->input('id');
        $car->price = $request->input('price');
        $car->img_url = $request->input('img_url');
        $car->description_text = $request->input('description_text');
        $car->color_id = $request->input('color_id');
        $car->model_id = $request->input('model_id');
        $car->series = $request->input('series');

        if($car->save()) {
            return new CarResource($car);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return new CarResource($car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);

        if($car->delete()) {
            return new CarResource($car);
        }
    }
}
