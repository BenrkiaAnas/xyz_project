<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table="gallerys";
    public $timestamps = false;
 
    protected $fillable = [
        'lieu',
        'description',
        'image',
        'position',
    ];

    public static function getImagePosition($position){

       $object=Gallery::where('position',$position)->get()->first();
       if($object){
        return asset('img/'.$object->image);
       }
       else {
        $object=new Gallery();
        return asset('img/'.$object->image);
       }
       

       }
    }
