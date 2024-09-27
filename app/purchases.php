<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchases extends Model
{
    protected $table='purchases';
    protected $guarded=false;
    use HasFactory;
}
