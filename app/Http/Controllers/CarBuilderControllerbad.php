<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use Illuminate\Support\Facades\DB;

class CarBuilderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Part  $parts
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Part $part)
    {
        $part = DB::table('parts')->where('id', $part->id = $request->id)->first();
        // return view with specific part data
        return view('admin.edit')->with(['part' => $part]);

        return redirect()->route('admin.users.index');
    }

    public function add() {
        return view('admin.add');
    }

    public function update(Request $request, Part $part)
    {

        // DB::table('parts')->where('id', $part->id = $request->id)->update([
        //     'part_name' => $request->part_name,
        //     'part_description' => $request->part_description,
        //     'part_category' => $request->part_category,
        // ]);

        // $part = DB::table('parts')->where('id', $request->id)->first();
        // $part->id = $request->id;
        $part->part_name = $request->part_name;
        $part->part_description = $request->part_description;
        $part->part_category = $request->part_category;

        $part->save();

        return redirect()->route('admin.parts');
    }

    protected function store(){

        // $vote = request()->all();
        // dd($vote);

        $part = new Part();
        // $part->id = request('part_id');
        $part->part_name = request('part_name');
        $part->part_description = request('part_description');
        $part->part_category = request('part_category');

        $part->save();
        
        return redirect('admin.parts');

    }


    public function destroy(Request $request, Part $part)
    {

        DB::table('parts')->where('id', $part->id = $request->id)->delete();  
        // $part->delete();
        return redirect()->route('admin.parts');
    }
}