<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [

        'EmployeePersonnelNumber',
        'quarter',
        'year',
        'evaluated',
        'rate',
        'percentage',
        'salary',
        'degree',
        'rating',
    ];
}
