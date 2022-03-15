<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'identity', 'phone_one', 'phone_two', 'Hijri_date_of_birth', 'birthday',
        'Hijri_age', 'birth_age', 'city_id', 'family_members', 'notes', 'bank_id', 'status'
    ];

    public function commitment(){
        return $this->hasMany(Commitment::class , 'receipt_id');
    }

    public function income(){
        return $this->hasMany(Income::class,'receipt_id');
    }

    public function salary(){
        return $this->hasMany(Salary::class ,'receipt_id');
    }
    public function realEstate(){
        return $this->hasMany(RealEstate::class , 'receipt_id');
    }

    public function realEstateRate(){
        return $this->hasMany(RealEstateRate::class ,'receipt_id');
    }

    public function landRates(){
        return $this->hasMany(LandRate::class ,'receipt_id');
    }

    public function land(){
        return $this->hasMany(Land::class ,'receipt_id');
    }
    public function city(){
        return $this->belongsTo(General::class ,'city_id');
    }
    public function bank(){
        return $this->belongsTo(General::class ,'bank_id');
    }
    public function product_type(){
        return $this->belongsTo(General::class ,'product_type_id');
    }
    public function product_detail(){
        return $this->belongsTo(General::class ,'product_details');
    }
    public function getRedirectUser()
    {
        return $this->belongsTo(User::class,'redirected_to');
    }
    public function compelete()
    {
        return $this->belongsTo(General::class,'compeleted');
    }
}
