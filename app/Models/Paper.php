<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'tittle',
        'fil_dir',
        'author',
        'topic'
    ];
}
