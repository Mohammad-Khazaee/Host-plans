<?php

namespace App\Http\Controllers;

use App\Models\Host;
use Illuminate\Http\Request;

class showHostController extends Controller
{
    public function index()
    {
        $host = Host::all();

        return view('welcome' , compact('host'));
    }
}
