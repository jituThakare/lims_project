<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Nominee extends Model
{
    use HasFactory; 
    public $fillable = [
       'nominee_id',
       'client_id',
       'name',
       'sex',
       'birth_date',
       'nid',
       'relationship',
       'priority',
       'phone'
    ];

    public $table ='nominee';

    // public static function boot(){

    //     parent::boot();

    //     static::creating( function($item) {
    //         Log::info("creating event is fired" . $item);
    //     });

    //     static::created( function($item) {
    //         Log::info("created event is fired" . $item);
    //     });
    // }

}
