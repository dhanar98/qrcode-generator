<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrCodeConfig extends Model
{

    protected $table = 'qr_code_config';


    protected $fillable = [
        'qr_code_id',
        'merge',
        'background_color',
        'gradient_from_color',
        'gradient_to_color',
        'gradient_type',
    ];

    
}

