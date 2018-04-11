<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regModel extends Model
{
    protected $table='reg';
    protected $fillable=['name','sid','fname','mname','class','section','session','roll','reg','shift','phone','dob','gnid','blood','age','address','gender','image'];
}
