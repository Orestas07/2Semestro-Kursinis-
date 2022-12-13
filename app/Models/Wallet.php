<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'avg_income',
        'balance',
        'loans',
        'goal_id',
        'goal_completed',
        'user_id'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
