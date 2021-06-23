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
            return view('dashboard_admin'); /* ->with('jsAlert', $message); */
        }

        return view('dashboard');

    }

    public function scanHistory_admin(){
        return view('scanHistory_admin');

    }



    public function store()
    {
        /* var_dump(request('Scan'));
        var_dump(request('typeofCMS'));
        var_dump(request('websiteName')); */
        // request('Scan')->$Scan;
        // $request->request->add(['img' => $img]);


        // ddd('runScript');
        // dd();
    }

}
