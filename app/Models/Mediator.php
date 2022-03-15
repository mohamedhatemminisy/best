<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediator extends Model
{
    use HasFactory;
    protected $fillable = ['name','code','url','user_id','phone_one','phone_two'];
}
