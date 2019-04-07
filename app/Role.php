<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name','desc',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users');
    }

    /**
     * A role can have many users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */



}
