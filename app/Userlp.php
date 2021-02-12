<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userlp extends Model
{
    
    protected $table = 'userlp';   
    protected $fillable = ['id_userlp', 'name', 'email', 'birthday', 'gender', 'created_at', 'updated_at'];
    protected $primaryKey = 'id_userlp';
}
