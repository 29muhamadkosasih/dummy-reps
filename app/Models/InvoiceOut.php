<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceOut extends Model
{
    use HasFactory;
    protected $table = 'invoice_out';
    protected $guarded = [];
}
