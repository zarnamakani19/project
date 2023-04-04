<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbProperti extends Model
{
    use HasFactory;

    protected $table = 'db_propertis';
    
    protected $fillable = [
        'housingname',
        'propertitype',
        'price',
        'Housetype',
        'sales_rent',
        'images'
    ];



}
