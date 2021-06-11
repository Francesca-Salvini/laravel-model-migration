<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class HomeController extends Controller
{
    public function index() {

        $packages = Package::all();
        
        $data = [
            'packages' => $packages
        ];
        return view('home', $data);
    }
}
