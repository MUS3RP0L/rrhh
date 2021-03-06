<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
