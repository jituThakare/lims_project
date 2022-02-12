<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',        
        'client_password',
        'name',
        'sex',
        'birth_date',
        'marital_status',
        'nid',
        'phone',
        'address', 
        'policy_id',
        'agent_id',
        'image'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'client';

}
