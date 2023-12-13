<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrCodeGeo extends Model
{
    protected $table = 'qr_code_geo';

    protected $fillable = [
        'latitude',
        'longitude',
        'qr_code_path',
    ];
}
