<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member_place extends Model
{
    use HasFactory;
    protected $fillable=[
        'place_name',
        'place_detail',
        'place_type',
        'map_url',
        'username'
    ];
}
