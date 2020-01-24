<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Gallery;
use DB;
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
        return view('back.view_crop');
    }

    public function imageCropPost(Request $request)
    {

        $datas = $request->dataSrc;
        $table_images=[];
        $i=1;
        foreach($datas as $data)
        {
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);


            $data = base64_decode($data);

            $image_name= $i.'_'.time().'.png';
            array_push( $table_images,$image_name);
            $path = public_path('img/'). $image_name;

            file_put_contents($path, $data);
            $i++;
        }

        return view('back.gdetails',['images'=>$table_images]);

    }

    public function create(Request $request){
        $data=$request->data;
        $i=1;
        foreach($data as $dt)
        {
            $image=$dt["image"];
            $description_['fr']=$dt["detail"];
            $description_['ar']=$dt["detail"];
            $description=json_encode($description_,JSON_UNESCAPED_UNICODE);
            $lieu_['fr']=$dt["lieu"];
            $lieu_['ar']=$dt["lieu_ar"];
            $lieu=json_encode($lieu_,JSON_UNESCAPED_UNICODE);
            DB::table('gallerys')->insert(
                ['image' =>$image,
                    'lieu' =>$lieu,
                    'description'=>$description,
                    'position'=>$i]
            );
            $i++;
        }
        return redirect('gallery/list');
    }

    public function getGallery()
    {
        $gallerys=Gallery::all();
        $gallerys=$gallerys->toArray();
        foreach($gallerys as $key => $val)
        {
            $gallerys[$key]['lieu']=json_decode($val['lieu'],true);
            $gallerys[$key]['description']=json_decode($val['description'],true);
         //   $gallerys[$key]['image']=$val['image'];
          //  $gallerys[$key]['id']=$val['id'];
        }

        if($gallerys){
            return view('back.glist',['gallerys'=>$gallerys]);
        }else{
            $gallerys=array();
            return view('back.glist',['gallerys'=>$gallerys]);
        }
        
    }

    public function toCrop()
    {
        return view('back.toCrop');
    }
    public function storeImage(Request $request)
    {

        $lieu_['fr']=$request->lieu;
        $lieu_['ar']=$request->lieu_ar;
        $description_['fr']=$request->description;
        $description_['ar']=$request->description_ar;
        $date=$request->date;
        $position=$request->position;
        $lieu=json_encode($lieu_,JSON_UNESCAPED_UNICODE);
        $description=json_encode($description_,JSON_UNESCAPED_UNICODE);
        //Image cropped traitement
        $data = $request->cropped_image;
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);
        $image_name='_'.time().'.png';
        $path = public_path('img/'). $image_name;
        file_put_contents($path, $data);
        //DAO
       $gallery=DB::table('gallerys')->insert(
            [  
                'image' =>$image_name,
                'lieu' =>$lieu,
                'description'=>$description,
                'position'=>$position,
                'date'=>$date]
        );
       $list_galleries=Gallery::all();
       if($list_galleries==null)
       {
        $list_galleries= array();
        return view('back.view_crop',compact('list_galleries'));
       }
      return view('back.view_crop',compact('list_galleries'));
    }

}
