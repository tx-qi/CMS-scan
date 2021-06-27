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



    public function runScript()
    {

        $website=request('websiteName');
        $initial='sudo python3 cmsmap.py';
        $end='-o tmp.txt';
        $scan=request('Scan');
        $typeofCMS=request('typeofCMS');
        $Compiled=$initial." ".$website." ".$scan." ".$typeofCMS." ".$end;
        print_r($Compiled. "  ");

        $path = base_path() . "\\resources\script\\dummy.py";
        print_r($path);
        $run=passthru('C:/Users/TAQI/AppData/Local/Programs/Python/Python39/python.exe ' . $path.' ');
        var_dump($run);



        // return redirect();
    }

}
