<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QrCodeWifi extends Model
{
    use SoftDeletes;

    protected $table = 'qr_code_wifi';

    protected $fillable = [
        'encryption',
        'ssid',
        'password',
        'hidden',
        'qr_code_path',
    ];
}
