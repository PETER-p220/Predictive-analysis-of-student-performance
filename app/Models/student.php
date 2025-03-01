<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    public $table='students';
    public $primaryKey='id';
    public $fillable=['name','password'];

    use HasFactory;
}
