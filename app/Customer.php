<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'very_satisfied', 'satisfied', 'not_satisfied'
    ];

}
