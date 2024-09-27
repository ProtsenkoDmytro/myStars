<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personals extends Model
{
    protected $table='personals';
    protected $guarded=false;
    use HasFactory;
}
