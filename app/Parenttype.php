<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parenttype extends Model
{
    protected $table='parenttypes';
    public function parentchildren()
    {
        return $this->hasMany(Parentchildren::class);
    }
}
