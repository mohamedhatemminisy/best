<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    public function business_sector(){
        return $this->belongsTo(General::class ,'business_sector_id');
    }

    public function employer(){
        return $this->belongsTo(General::class ,'employer_id');
    }
    public function bank(){
        return $this->belongsTo(General::class ,'bank_salary_transferred');
    }
}
