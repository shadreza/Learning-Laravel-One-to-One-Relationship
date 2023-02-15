<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    // Add [name] to fillable property to allow mass assignment on [App\Models\Address].
    // we got to give permission to put data
    // we need to allow the name field
    protected $fillable = [
        'name'
    ];
}
