<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

        $today = date("y-m-d", strtotime('now')); 
        //dd($today);
        $trains = Train::where('giorno_partenza', $today)->get();
        //debug
        //dd($trains);
        return view('home', compact('trains'));
    }
}
