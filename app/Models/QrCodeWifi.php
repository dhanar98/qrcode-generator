<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrCodeWifi extends Model
{
    protected $table = 'qr_code_wifi';

    protected $fillable = [
        'encryption',
        'ssid',
        'password',
        'hidden',
        'qr_code_path',
    ];
}
