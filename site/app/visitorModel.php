<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitorModel extends Model
{
    protected $table = 'visitor';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
