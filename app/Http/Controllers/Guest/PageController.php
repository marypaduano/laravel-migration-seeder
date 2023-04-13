<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all(); //SELECT * from trains

        $data = [
            'trains' => $trains
        ];

        return view('welcome', $data);
    }
}
