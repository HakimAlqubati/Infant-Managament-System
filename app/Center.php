<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Center extends Model
{
    protected $fillable = [
        'name','email','address','phpne', 'name_owner', 
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
