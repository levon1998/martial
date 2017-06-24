<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    protected $table = "prices";
    public $timestamps = false;

    public function service()
    {
        return $this->hasOne('App\models\Services', 'id', 'service_id');
    }
}
