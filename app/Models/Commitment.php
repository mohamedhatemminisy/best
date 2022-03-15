<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commitment extends Model
{
    use HasFactory;

    public function product_type(){
        return $this->belongsTo(General::class ,'product_type_id');
    }

    public function sponser(){
        return $this->belongsTo(General::class ,'sponser_id');
    }

    public function payment_status(){
        return $this->belongsTo(General::class ,'payment_status_id');
    }

}
