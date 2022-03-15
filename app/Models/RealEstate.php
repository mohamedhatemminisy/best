<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstate extends Model
{
    use HasFactory;

    public function estate_type(){
        return $this->belongsTo(General::class ,'real_estate_type_id');
    }

    public function estate_status(){
        return $this->belongsTo(General::class ,'real_estate_status_id');
    }

    public function city(){
        return $this->belongsTo(General::class ,'real_city_id');
    }

    public function license_type(){
        return $this->belongsTo(General::class ,'real_license_type_id');
    }

    public function rating(){
        return $this->hasMany(RealEstateRate::class , 'real_estate_id');
    }
}
