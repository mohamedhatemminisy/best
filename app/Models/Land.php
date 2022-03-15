<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;
    public function rating(){
        return $this->hasMany(LandRate::class , 'land_id');
    }

    public function land_type(){
        return $this->belongsTo(General::class ,'land_type_id');
    }

    public function land_status(){
        return $this->belongsTo(General::class ,'land_status_id');
    }

    public function city(){
        return $this->belongsTo(General::class ,'real_city_id');
    }

    public function license_type(){
        return $this->belongsTo(General::class ,'real_license_type_id');
    }

}
