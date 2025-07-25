<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index(){

        $travels = Travel::all();

        return view('travel.index', compact('travels'));
    }

    public function show(Request $request, $slug){
        return view('travel.show', compact('slug'));
    }
}
