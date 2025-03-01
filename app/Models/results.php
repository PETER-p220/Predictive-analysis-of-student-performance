<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class results extends Model
{
    //
    public $table='results';
    public $primaryKey='id';
    public $fillable=['candidate_no','sex','physics','chemistry','biology','mathematics','swahili','english','geography','civics','history'];


    use HasFactory;
}
