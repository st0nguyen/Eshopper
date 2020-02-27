<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'tbl_customers';
    protected $primaryKey = 'customer_id';
    public function customer()
    {
        return $this->hasOne('App\order', 'order_id', 'customer_id');
    }
}
