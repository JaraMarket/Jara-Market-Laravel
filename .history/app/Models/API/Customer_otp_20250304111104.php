<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\Contracts\HasApiTokens;

class Otp extends Model
{
    use HasApiTokens, HasFactory;
    protected $guarded = [];
}
