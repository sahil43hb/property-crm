<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_name',
        'property_code',
        'location',
        'user_id',
        'property_type_id',
        'agent_commission_value',
        'agent_commission_type',
     
    ];

}
