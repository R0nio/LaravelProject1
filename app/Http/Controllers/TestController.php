<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function about(){
        $data = ['name' => 'John', 'phone'=> '74382873428', 'age' => 25];
        return view('about', compact('data'));
    }

    public function contact() {
        $adress = "Main street, 15";
        return view('contacts', compact('adress'));
    }
}
