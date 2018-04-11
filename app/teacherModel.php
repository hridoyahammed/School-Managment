<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacherModel extends Model
{
    protected $table='teacher';
    protected $fillable=['tid','name','nid','dob','blood','gender','phone','rel','email','address','image'];
}
