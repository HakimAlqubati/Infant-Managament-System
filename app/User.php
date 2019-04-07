<?php

namespace App;
use App\Activity;
use App\Center;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

//    public function isAdmin()
//    {
//        foreach ($this->roles()->get() as $role)
//        {
//            if ($role->name == 'Admin')
//            {
//                return true;
//            }
//        }
//    }
    public function children()
    {
        return $this->belongsToMany(User::class, 'parentchildren');
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_users');
    }


    protected $fillable = [
        'first_name','last_name','email','media', 'profile',
        'address','phone', 'password','center_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function activity()
    {
        return $this->hasMany(Activity::class);
    }
    public function centers()
    {
        return $this->belongsTo(Center::class);
    }
}
