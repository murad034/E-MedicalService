<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoModel extends Model
{
    protected $fillable = [
       'userId','photo',
    ];
}
