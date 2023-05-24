<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Receivable extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'customer_name',
        'customer_address',
        'customer_phone_number',
        'invoice_date',
        'due_date',
        'invoice_amount',
        'terms_of_payment',
    ];

    
}
