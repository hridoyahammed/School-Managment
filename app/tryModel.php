<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tryModel extends Model
{
    protected $table='try';
    protected $fillable=['name','age','number','gender','image'];
}
