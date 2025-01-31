<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['fname','mname','lname','email','gender','mangername','designation','role','skills','fixedsalary'];
}
