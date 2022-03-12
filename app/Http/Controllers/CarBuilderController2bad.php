<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use Illuminate\Support\Facades\DB;

class CarBuilderController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('carbuilder.car-builder');
    }

    public function parts()
    {
        $parts = Part::all();
        return view('admin.parts')->with('parts', $parts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $part = new Part();
        $part->part_name = request('part_name');
        $part->part_description = request('part_description');
        $part->part_category = request('part_category');

        $part->save();
        
        return redirect('admin.parts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Part $part)
    {
        $part = DB::table('parts')->where('id', $part->id)->first();
        // return view with specific part data
        return view('admin.edit')->with(['part' => $part]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Part $part)
    {
        $part->part_name = $request->part_name;
        $part->part_description = $request->part_description;
        $part->part_category = $request->part_category;

        $part->save();

        return redirect()->route('admin.parts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Part $part)
    {
        $part->delete();
        return redirect()->route('admin.parts');
    }
}
