<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeResignation extends Model
{
    // use SoftDeletes;
    protected $table = "employee_resignations";
    protected $guarded = [];
}
