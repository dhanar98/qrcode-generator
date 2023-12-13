<?php

namespace App\Observers;

use App\Models\QrCodeConfig;

class QrCodeConfigObserver
{

    /**
     * Handle the QrCodeConfig "creating" event.
    */
    public function creating(QrCodeConfig $qrCodeConfig): void
    {

    }

    /**
     * Handle the QrCodeConfig "created" event.
     */
    public function created(QrCodeConfig $qrCodeConfig): void
    {
        //
    }

    /**
     * Handle the QrCodeConfig "updated" event.
     */
    public function updated(QrCodeConfig $qrCodeConfig): void
    {
        //
    }
}
