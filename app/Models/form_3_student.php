<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_3_student extends Model
{
    //
    public $table='form_3_students';
    public $primaryKey='id';
    public $fillable=['cdn','first_name','last_name','surname'];

    use HasFactory;
}
