<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        "title","description","img","price" , "sale_date","type"
    ];
}
