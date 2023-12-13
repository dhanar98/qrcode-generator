<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrCodePhoneNumber extends Model
{
    protected $table = 'qr_code_phone_number';

    protected $fillable = [
        'qr_code_id',
        'phone_number'
    ];
}
