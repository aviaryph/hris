<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeWarning extends Model
{
    // use SoftDeletes;
    protected $table = "employee_warnings";
    protected $guarded = [];
}
