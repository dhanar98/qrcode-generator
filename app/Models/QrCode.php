<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QrCode extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'qr_code';

    protected $fillable = [
        'qr_code_key',
        'user_id',
        'size',
        'style',
        'eye',
        'margin',
        'format',
        'creation_date',
        'expiry_date',
    ];

    public function config()
    {
        return $this->hasOne(QrCodeConfig::class);
    }

    public function email()
    {
        return $this->hasOne(QrCodeEmail::class);
    }

    public function phoneNumber()
    {
        return $this->hasOne(QrCodePhoneNumber::class);
    }

    public function sms()
    {
        return $this->hasOne(QrCodeSms::class);
    }

    public function wifi()
    {
        return $this->hasOne(QrCodeWifi::class);
    }

    public function geo()
    {
        return $this->hasOne(QrCodeGeo::class);
    }

    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }
}
