<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvPayment extends Model
{
    use HasFactory;
    protected $table = 'invpayment';
    protected $guarded = [];
}