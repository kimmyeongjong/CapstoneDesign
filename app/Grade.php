<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function grade()
{
    return $this->hasMany('App\User');
}
}
