<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class scanHistory_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function result(Request $request)
    {   //$filename=$file;
        //dd($request);
        $filename=$request->fileName;

        // style windows
        $path =base_path() . "\\resources\scanJSON\\$filename";

        // $path = base_path() . "/resources/scanJSON/$filename.json";

        // $data = (array)json_decode(file_get_contents($path), true);
        $data = (array)json_decode(file_get_contents($path), true);
        $array=$data['data'];
        // $data='';
        //dd(($array));


        return view('scanHistory.scanResult',compact('data'));
    }


    public function delete(Request $request)
    {
        $filename=$request->fileName;

        // style windows
        $path =base_path() . "\\resources\scanJSON\\$filename";
        File::delete($path);



        return redirect()->to('/scanHistory');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function scanHistory(){
        $path=base_path() . "\\resources\scanJSON\\";
        // $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));
        // dd($files);

        return view('scanHistory.index',compact('files'));

    }
}
