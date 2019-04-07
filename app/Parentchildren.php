<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentchildren extends Model
{
    protected $table='parentchildren';
    protected $fillable=['user_id','parent_type_id','child_id','note'];

}
