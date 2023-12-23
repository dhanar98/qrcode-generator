<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QrCodeConfig extends Model
{
    use SoftDeletes;

    protected $table = 'qr_code_config';

    protected $fillable = [
        'qr_code_id',
        'merge',
        'color',
        'background_color',
        'gradient_from_color',
        'gradient_to_color',
        'gradient_type',
    ];
}
