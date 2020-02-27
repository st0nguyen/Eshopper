<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'tbl_order';
    protected $primaryKey = 'order_id';

    public function orderDetail()
    {
        return $this->hasMany('App\orderDetail', 'order_id');
    }

    public function customer()
    {
        return $this->belongsTo('App\customer', 'customer_id');
    }
    public function shipping()
    {
        return $this->belongsTo('App\shipping', 'shipping_id');
    }

    public function payment()
    {
        return $this->hasOne('App\payment','payment_id');
    }



}
