<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'email' , 'message' , 'created_at'
    ];
}
