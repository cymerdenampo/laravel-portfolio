<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staticPagesController extends Controller
{
    //

    public function showDashboard()
    {
        return view('/index');
    }
}
