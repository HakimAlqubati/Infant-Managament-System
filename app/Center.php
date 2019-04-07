<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Children;


class Center extends Model
{
    protected $table='center';
    protected $fillable = [
        'name','email','address','phone', 'onwer_name','media','profile','notes',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function children()
    {
        return $this->hasMany(Children::class);
    }
}
