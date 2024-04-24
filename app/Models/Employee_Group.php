<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Group extends Model
{
    use HasFactory;

    protected $fillable = [

        'EmployeePersonnelNumber',
        'groupId',

    ];
}
