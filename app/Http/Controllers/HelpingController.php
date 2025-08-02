<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Helpinghand;


class HelpingController extends Controller
{
    public function index(){
        $tasks = Helpinghand::all();
        return view('helping.index', compact('tasks'));
    }
}
