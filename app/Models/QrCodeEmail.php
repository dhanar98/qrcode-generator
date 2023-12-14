<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QrCodeEmail extends Model
{
    use SoftDeletes;

    protected $table = 'qr_code_email';

    protected $fillable = [
        'qr_code_id',
        'email',
        'subject',
        'message',
        'qr_code_path',
    ];
}
