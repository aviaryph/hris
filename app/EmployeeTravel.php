<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeTravel extends Model
{
    // use SoftDeletes;
    protected $table = "employee_travels";
    protected $guarded = [];
}
