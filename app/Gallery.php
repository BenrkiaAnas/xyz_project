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
        'date',
    ];

    public static function getImagePosition($position){

       $object=Gallery::where('position',$position)->get()->first();
       if($object){
        return asset('img/'.$object->image);
       }
       else {
       
        return null;
       }
       

       }
    }
