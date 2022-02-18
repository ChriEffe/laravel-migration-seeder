<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_date', '>=', '18/02/2022')->get();
        $data = ['trains' => $trains];
        return view('home', $data);
    }
}
