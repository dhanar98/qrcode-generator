<?php

namespace App\Observers;

use App\Models\QrCode;

class QrCodeObserver
{
    /**
     * Handle the QrCodeConfig "creating" event.
     */
    public function creating(QrCode $qrCode): void
    {
        //
    }

    /**
     * Handle the QrCode "created" event.
     */
    public function created(QrCode $qrCode): void
    {
        //
    }

    /**
     * Handle the QrCode "updated" event.
     */
    public function updated(QrCode $qrCode): void
    {
        //
    }

    /**
     * Handle the QrCode "deleted" event.
     */
    public function deleted(QrCode $qrCode): void
    {
        //
    }

    /**
     * Handle the QrCode "restored" event.
     */
    public function restored(QrCode $qrCode): void
    {
        //
    }

    /**
     * Handle the QrCode "force deleted" event.
     */
    public function forceDeleted(QrCode $qrCode): void
    {
        //
    }
}
