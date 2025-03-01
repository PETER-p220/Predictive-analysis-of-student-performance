<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentResult extends Model
{
    //
    public $table='student_results';
    public $primaryKey='id';
    public $fillable=['student_id','name','subject','marks','class'];
}
