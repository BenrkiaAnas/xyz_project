<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    public function tester(Request $request)
    {
        echo 'hahwa '.$request->tab;exit;

        echo "limage ".$request->tab;exit;
        return 1;
    }

/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageCrop()
    {
        return view('test');
    }

    public function imageCropPost(Request $request)
    {
         echo 1;
         foreach($request->table as $data)
         {
            $data = $request->image;
            echo "ici";
         }
        $data = $request->image;
      exit;

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);


        $data = base64_decode($data);
      
        $image_name= time().'.png';
        $path = public_path('img/'). $image_name;
       //$x= Storage::disk('public')->put($image_name, $data);
        
       file_put_contents($path, $data);
       

        return response()->json(['success'=>'done']);
    }













}
