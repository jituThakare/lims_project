<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use HasFactory;
    public $fillable = [
        'policy_id',
        'term',
        'health_status',
        'system',
        'payment_method',
        'coverage',
        'age_limit'
    ];

    protected $table = 'policy';
}
