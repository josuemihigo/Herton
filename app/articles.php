<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    //
    protected $fillable = ['titre', 'img', 'content'];
}
