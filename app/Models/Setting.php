<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Setting extends Model  
{
    use HasFactory;
    protected $fillable = ['logo','logo_white', 'phone','email','facebook','twitter','linkedin','instagram','website','fax','whatsapp','client','map','start','po_box','name', 'description','address','working_times','copyrights'];
    
}
