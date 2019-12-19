<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $primarykey="id";
    protected $table="faqs";
    protected $fillable = [
        'question', 'reponse', 
    ];
    public $timestamps = false; 
}
