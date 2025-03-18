<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class form_4_prediction extends Model
{
    //
    public $table='form_4_predictions';
    public $primaryKey='id';
    public $fillable=['candidate_no','sex','physics','chemistry','biology','mathematics','swahili','english','geography','civics','history'];

    use HasFactory;
}
