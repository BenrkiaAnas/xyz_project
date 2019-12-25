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
        
        $datas = $request->images;
       
        $i=1;
         foreach($datas as $data)
         {
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
    
    
            $data = base64_decode($data);
          
            $image_name= $i.'_'.time().'.png';
            $path = public_path('img/'). $image_name;
            
           file_put_contents($path, $data);
           $i++;
         }
        return response()->json(['success'=>'done']);
    }













}
