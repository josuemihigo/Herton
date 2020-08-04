<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faqmodel extends Model
{
    //
    protected $fillable = ['question', 'reponse', 'categorie'];

}
