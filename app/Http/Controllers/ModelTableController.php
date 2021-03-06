<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ModelTable;
use App\Http\Resources\ModelTable as ModelTableResource;

class ModelTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model_tables = ModelTable::orderBy('id', 'ASC')->get();
        return ModelTableResource::collection($model_tables);
    }

    // get by brand_id
    public function getByBrand($brand_id)
    {
        $model_tables = ModelTable::where('brand_id', $brand_id)->get();
        return ModelTableResource::collection($model_tables);
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
        $model_table = $request->isMethod('put') ? ModelTable::findOrFail
        ($request->id) : new ModelTable;

        $model_table->id = $request->input('id');
        $model_table->name = $request->input('name');
        $model_table->brand_id = $request->input('brand_id');

        if($model_table->save()) {
            return new ModelTableResource($model_table);
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
        $model_table = ModelTable::findOrFail($id);
        return new ModelTableResource($model_table);
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
        $model_table = ModelTable::findOrFail($id);

        if($model_table->delete()) {
            return new ModelTableResource($model_table);
        }
    }
}
