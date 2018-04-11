<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admissionModel extends Model
{
    protected $table='admission';
    protected $fillable=['name','class','year','fname','mname','psn','phone','dob','fo','mo','ai','gnid','blood','rel','sta','prad','pead','gender','image','qut'];
}
