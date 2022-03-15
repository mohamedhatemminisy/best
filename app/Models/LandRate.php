<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandRate extends Model
{
    use HasFactory;
    public function rate_bank()
    {
        return $this->belongsTo(General::class, 'land_bank_id');
    }

    public function rate_bank_emp()
    {
        return $this->belongsTo(General::class, 'emp_rate_id');
    }
}
