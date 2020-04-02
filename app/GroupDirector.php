<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupDirector extends Model
{
    protected $fillable = ['name', 'position', 'image'];
}
