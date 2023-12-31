<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    protected $table = 'app_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'profile_dp',
        'country_code',
        'phone_number',
        'password',
        'address',
        'is_active',
        'referal_code',
        'app_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'api_key',
        'api_password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_joined' => 'boolean',
        'is_active' => 'boolean',
        'is_restricted' => 'boolean'
    ];

    public function qrcodes()
    {
        return $this->hasMany(QrCode::class);
    }

    // Relationship for phone_number QrCodes
    public function phoneNumberCodes()
    {
        return $this->hasMany(QrCode::class)->ofType('phone_number');
    }

    // Relationship for SMS QrCodes
    public function smsCodes()
    {
        return $this->hasMany(QrCode::class)->ofType('sms');
    }

    // Relationship for WiFi QrCodes
    public function wifiCodes()
    {
        return $this->hasMany(QrCode::class)->ofType('wifi');
    }

    // Relationship for Email QrCodes
    public function emailCodes()
    {
        return $this->hasMany(QrCode::class)->ofType('email');
    }

    public function referralsMade()
    {
        return $this->hasMany(Referral::class, 'referrer_id');
    }

    public function referralsReceived()
    {
        return $this->hasMany(Referral::class, 'referred_id');
    }
}
