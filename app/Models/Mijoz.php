<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mijoz extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'chesk'
    ];

    protected $table = 'mijozs';
   
    public $timestamps = false;

}
