<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    protected $table="children";
    protected $fillable = [
        'f_name','l_name','brith_day','level_educ', 'gender', 'center_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'parentchildren');
    }
    public function centers()
    {
        return $this->belongsTo(Center::class);
    }
}
