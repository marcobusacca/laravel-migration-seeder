<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Passenger;

class PassengerController extends Controller
{
    public function passengers(){
        $passengers = Passenger::all();
        return view('pages/passengers', compact('passengers'));
    }
}