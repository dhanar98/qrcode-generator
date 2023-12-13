<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrCodeSms extends Model
{
    protected $table = 'qr_code_sms';

    protected $fillable = [
        'qr_code_id',
        'phone_number',
        'message',
        'qr_code_path',
    ];
}
