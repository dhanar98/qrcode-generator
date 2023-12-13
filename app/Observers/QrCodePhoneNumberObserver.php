<?php

namespace App\Observers;

use App\Models\QrCodePhoneNumber;

class QrCodePhoneNumberObserver
{


    /**
    * Handle the QrCodeConfig "creating" event.
     */
    public function creating(QrCodePhoneNumber $qrCodePhoneNumber): void
    {
        //
    }


    /**
     * Handle the QrCodePhoneNumber "created" event.
     */
    public function created(QrCodePhoneNumber $qrCodePhoneNumber): void
    {
        //
    }

    /**
     * Handle the QrCodePhoneNumber "updated" event.
     */
    public function updated(QrCodePhoneNumber $qrCodePhoneNumber): void
    {
        //
    }
}
