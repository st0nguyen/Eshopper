<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table = 'tbl_payment';
    protected $primaryKey = 'payment_id';

//    public function order()
//    {
//        return $this->belongsTo('App\order');
//    }
}
