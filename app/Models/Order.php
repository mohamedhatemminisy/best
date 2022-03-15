<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','identify_number','city','company','salary','bank','financing','benefit','responsible','problem','message','code'];
}
