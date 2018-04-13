<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendencModel extends Model
{
    protected $table='attendenc';
    protected $fillable=['sid','date','roll','class','section','intime','outtime','status'];
}
