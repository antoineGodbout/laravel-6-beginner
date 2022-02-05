<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = \App\Models\Service::all();
        return view('service.index', compact('services'));
    }

    public function store(){
        $data = request()->validate([
            'name'=> 'required|min:5'
        ]);
        \App\Models\Service::create($data);
        return redirect()->back();
    }
}
