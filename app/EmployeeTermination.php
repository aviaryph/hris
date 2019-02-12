<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeTermination extends Model
{
    // use SoftDeletes;
    protected $table = "employee_terminations";
    protected $guarded = [];
}
