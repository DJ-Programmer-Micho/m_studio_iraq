<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // PAGE VIEW
    // public function dashboard(){
    //     return view('dashboard.rest.pages.dashboard.index');
    // } // END FUNCTION (DASHBOARD)
    public function client(){
        return view('pages.client.index');
    } // END FUNCTION (DASHBOARD)
}
