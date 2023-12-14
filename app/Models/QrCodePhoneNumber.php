<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QrCodePhoneNumber extends Model
{
    use SoftDeletes;

    protected $table = 'qr_code_phone_number';

    protected $fillable = [
        'qr_code_id',
        'phone_number',
        'qr_code_path',
    ];
}
