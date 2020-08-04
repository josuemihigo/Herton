<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formationModel extends Model
{

    protected $fillable = ['name', 'email', 'phone', 'password'];
}
