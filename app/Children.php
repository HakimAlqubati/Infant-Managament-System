<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    protected $fillable = [
        'f_name','l_name','brith_day','level_educ', 'gender', 'center_id',
    ];
    //
}
