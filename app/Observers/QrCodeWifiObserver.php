<?php

namespace App\Observers;

use App\Models\QrCodeWifi;

class QrCodeWifiObserver
{
    /**
     * Handle the QrCodeConfig "creating" event.
     */
    public function creating(QrCodeWifi $qrCodeWifi): void
    {
        //
    }

    /**
     * Handle the QrCodeWifi "created" event.
     */
    public function created(QrCodeWifi $qrCodeWifi): void
    {
        //
    }

    /**
     * Handle the QrCodeWifi "updated" event.
     */
    public function updated(QrCodeWifi $qrCodeWifi): void
    {
        //
    }
}
