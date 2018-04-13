<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class markModel extends Model
{
     protected $table='mark';
     protected $fillable=['suid','year','mark','stid','exid'];
}

