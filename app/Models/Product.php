<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // definisco i campi da inviare al databese per ogni og
    protected $fillable= ['name', 'description', 'price'];
}


