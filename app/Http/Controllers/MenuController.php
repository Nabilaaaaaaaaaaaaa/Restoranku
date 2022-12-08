<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function tampilMinuman()
    {
        return view('minuman.index');
    }
}
