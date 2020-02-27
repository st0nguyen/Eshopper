<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class product extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'tbl_product';
    protected $primaryKey = 'product_id';


    public function product()
    {
        return $this->hasOne('App\order');
    }
}
