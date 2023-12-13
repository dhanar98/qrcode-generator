<?php

namespace App\Observers;

use App\Models\QrCodeEmail;

class QrCodeEmailObserver
{
    /**
     * Handle the QrCodeConfig "creating" event.
    */
    public function creating(QrCodeEmail $qrCodeEmail): void
    {

    }

    /**
     * Handle the QrCodeEmail "created" event.
     */
    public function created(QrCodeEmail $qrCodeEmail): void
    {
        //
    }

    /**
     * Handle the QrCodeEmail "updated" event.
     */
    public function updated(QrCodeEmail $qrCodeEmail): void
    {
        //
    }
}
