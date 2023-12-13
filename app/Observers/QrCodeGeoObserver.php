<?php

namespace App\Observers;

use App\Models\QrCodeGeo;

class QrCodeGeoObserver
{


    /**
    * Handle the QrCodeConfig "creating" event.
     */
    public function creating(QrCodeGeo $qrCodeGeo): void
    {
        //
    }

    /**
     * Handle the QrCodeGeo "created" event.
     */
    public function created(QrCodeGeo $qrCodeGeo): void
    {
        //
    }

    /**
     * Handle the QrCodeGeo "updated" event.
     */
    public function updated(QrCodeGeo $qrCodeGeo): void
    {
        //
    }
}
