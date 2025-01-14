<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{

    protected $fillable = [
        'referrer_id',
        'referred_id',
        'referral_code',
        'reward_amount',
        'is_rewarded',
    ];

    // Relationship to referrer (user who referred)
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id');
    }

    // Relationship to referred user
    public function referred()
    {
        return $this->belongsTo(User::class, 'referred_id');
    }
}
