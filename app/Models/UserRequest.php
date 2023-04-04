<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
    use HasFactory;

    protected $table = 'user_request';
    protected $fillable = [

     
        'name',
        'email',
        'phone',
        'message'
    ];
}
