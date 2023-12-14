<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QrCodeGeo extends Model
{
    use SoftDeletes;

    protected $table = 'qr_code_geo';

    protected $fillable = [
        'latitude',
        'longitude',
        'qr_code_path',
    ];
}
