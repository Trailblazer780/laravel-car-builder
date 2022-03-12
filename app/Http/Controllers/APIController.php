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
}
