<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeePromotion extends Model
{
    // use SoftDeletes;
    protected $table = "employee_promotions";
    protected $guarded = [];
}
