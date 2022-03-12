<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;

class APIController extends Controller
{
    public function index()
    {
        // return json of all parts
        $parts = Part::all();
        return response()->json($parts);
    }

    public function cars()
    {
        // return json of all parts with catergory = car
        $parts = Part::where('part_category', 'Car')->get();
        return response()->json($parts);
    }
    public function body()
    {
        // return json of all parts with catergory = body
        $parts = Part::where('part_category', 'Body')->get();
        return response()->json($parts);
    }
    public function brakes()
    {
        // return json of all parts with catergory = brakes
        $parts = Part::where('part_category', 'Brakes')->get();
        return response()->json($parts);
    }
    public function suspension()
    {
        // return json of all parts with catergory = suspension
        $parts = Part::where('part_category', 'Suspension')->get();
        return response()->json($parts);
    }
    public function engine()
    {
        // return json of all parts with catergory = engine
        $parts = Part::where('part_category', 'Engine')->get();
        return response()->json($parts);
    }
    public function exhaust()
    {
        // return json of all parts with catergory = exhaust
        $parts = Part::where('part_category', 'Exhaust')->get();
        return response()->json($parts);
    }
    public function transmission()
    {
        // return json of all parts with catergory = exhaust
        $parts = Part::where('part_category', 'Transmission')->get();
        return response()->json($parts);
    }
}
