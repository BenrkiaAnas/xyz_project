<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table="gallerys";
    public $timestamps = false;
    public $fillable=['lieu','description','lieudetail'];
}
