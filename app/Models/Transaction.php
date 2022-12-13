<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'description',
        'purchase_date',
        'cost',
        'wallet_id'
    ];
    protected $casts = [
        'purchase_date' => 'date',
    ];
}
