<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    protected $table = 'service';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyTipe = 'int';
    public $timestamps = false;
}
