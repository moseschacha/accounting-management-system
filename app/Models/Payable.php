<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Payable extends Model
{
    use HasFactory;
    protected $fillable = [
        'vendor_name',
        'vendor_address',
        'vendor_phone_number',
        'vendor_invoice',
        'due_date',
        'payment_terms',
    ];
}
