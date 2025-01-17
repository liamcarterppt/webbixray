<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Str;

class User extends Authenticatable
{


    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'referral_code'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $user->referral_code = Str::random(8); // Generate a random referral code
            $user->save();
        });

        static::created(function ($user) {
            $user->wallet()->create([
                'wallet_id' => Str::random(12), // Generate a random wallet ID
                'balance' => 0.00, // Default balance
            ]);
        });
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    public function referrals() {
        return $this->hasMany(Referral::class, 'referrer_id');
    }

    public function referredBy() {
        return $this->belongsTo(User::class, 'referred_id');
    }

}
