<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function trains(){
        $trains = Train::where('departure_date', date('Y-m-d'))->get();
        return view('pages/trains', compact('trains'));
    }
}