<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiData extends Model
{
    use HasFactory;

    protected $table = "apidata";
    public $timestamps = true;

    protected $fillable = [

        'api',
        'description',
        'auth',
        'https',
        'cors',
        'link',
        'category',
        'created_at',
        'updated_at',
    ];

    
}
