<?php

namespace App\Http\Controllers;

use App\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_date', '>=', Carbon::today())->get();
        $data = ['trains' => $trains];
        return view('home', $data);
    }

    public function show(Train $train)
    {
        return view('show', compact('train'));
    }
}
