<?php

namespace App\Observers;

use App\Models\QrCodeSms;

class QrCodeSmsObserver
{
    /**
     * Handle the QrCodeConfig "creating" event.
     */
    public function creating(QrCodeSms $qrCodeSms): void
    {
        //
    }

    /**
     * Handle the QrCodeSms "created" event.
     */
    public function created(QrCodeSms $qrCodeSms): void
    {
        //
    }

    /**
     * Handle the QrCodeSms "updated" event.
     */
    public function updated(QrCodeSms $qrCodeSms): void
    {
        //
    }
}
