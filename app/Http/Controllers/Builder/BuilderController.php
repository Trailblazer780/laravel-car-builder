<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Models\Build;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class BuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('builder.builder');
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
        $build = new Build();
        $build->email = request('email');
        $build->name = request('name');
        $build->car = request('car');
        if(request('engine')!= null){
            // loop through engine options and add them to the build
            foreach(request('engine') as $engine){
                $build->engine_options = $build->engine_options . $engine . ',';
            }
        }
        if(request('body')!= null){
            // loop through brakes options and add them to the build
            foreach(request('body') as $body){
                $build->body_options = $build->body_options . $body . ',';
            }
        }
        if(request('suspension')!= null){
            // loop through brakes options and add them to the build
            foreach(request('suspension') as $suspension){
                $build->suspension_options = $build->suspension_options . $suspension . ',';
            }
        }
        if(request('brake')!= null){
            // loop through brakes options and add them to the build
            foreach(request('brake') as $brakes){
                $build->brakes_options = $build->brakes_options . $brakes . ',';
            }
        }
        if(request('transmission')!= null){
            // loop through exhaust options and add them to the build
            foreach(request('transmission') as $transmission){
                $build->transmission_options = $build->transmission_options . $transmission . ',';
            }
        }
        if(request('exhaust')!= null){
            // loop through exhaust options and add them to the build
            foreach(request('exhaust') as $exhaust){
                $build->exhaust_options = $build->exhaust_options . $exhaust . ',';
            }
        }
        $build->save();
        // dump($build);
        // redirect to a view page with the build
        return redirect('/builder/fullbuild/'.$build->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Build  $build
     * @return \Illuminate\Http\Response
     */
    public function show(Build $build)
    {
        // show view with build
        return view('builder.fullbuild')->with('build', $build);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Build  $build
     * @return \Illuminate\Http\Response
     */
    public function edit(Build $build)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Build  $build
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Build $build)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Build  $build
     * @return \Illuminate\Http\Response
     */
    public function destroy(Build $build)
    {
        //
    }
}
