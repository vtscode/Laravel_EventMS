<?php

namespace App\Http\Controllers\Admin;

class HomeController
{
    public function index()
    {
        // return view('admin.home');
        return redirect()->route('admin.venues.index');
    }
}
