<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminCrud extends Model
{
	protected $table = 'admin';
    protected $fillable = [
     'firstName', 'lassName', 'image', 'email', 'id', 'country', 'password', 'role', 'phone'
    ];
}
