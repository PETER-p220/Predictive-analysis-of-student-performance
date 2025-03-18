<?php

namespace App\Models;

use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_1 extends Model
{
    //
    public $table='form_1s';
    public $primaryKey='id';
    public $fillable=['candidate_no','average','sex','physics','chemistry','biology','mathematics','swahili','english','geography','civics','history'];

    use Searchable;
   

    use HasFactory;

}
