<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrCodeEmail extends Model
{
    protected $table = 'qr_code_email';

    protected $fillable = [
        'qr_code_id',
        'email',
        'subject',
        'message',
        'qr_code_path'
    ];
}
