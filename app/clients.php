<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    protected $table='clients';
    protected $guarded=false;
    use HasFactory;
}
