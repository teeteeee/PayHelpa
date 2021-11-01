<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'fu_id',
        'lu_id',
        'rate',
        'amount',
        'fu_rating',
        'lu_rating',
        'transaction_receipt',
        'subject',
        'website_link' ,
        'description', 
        'payment_type'
    ];

}
