<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('user')){
            return view('dashboard');
        }
        elseif(Auth::user()->hasRole('admin')){
            return view('dashboard_admin');
        }

        return view('dashboard');

    }

    public function scanHistory_admin(){
        return view('scanHistory_admin');

    }

    public function userList_admin(){
        return view('userList_admin');

    }
}
