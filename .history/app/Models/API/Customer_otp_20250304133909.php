<?php
namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Customer_otp extends Model
{
    use HasFactory;
    protected $fillable = [
        'otp',
        'customer_id'
    ];    use HasApiTokens, HasFactory, Notifiable;

}
