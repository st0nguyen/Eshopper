<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shipping extends Model
{
    protected $table = 'tbl_shipping';
    protected $primaryKey = 'shipping_id';

    public function order()
    {
        return $this->hasOne('App\order');
    }
}

