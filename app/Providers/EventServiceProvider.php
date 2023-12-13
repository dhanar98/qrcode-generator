<?php

namespace App\Providers;

use App\Models\QrCode;
use App\Models\QrCodeConfig;
use App\Models\QrCodeEmail;
use App\Models\QrCodeGeo;
use App\Models\QrCodePhoneNumber;
use App\Models\QrCodeSms;
use App\Models\QrCodeWifi;
use App\Models\User;
use App\Observers\QrCodeConfigObserver;
use App\Observers\QrCodeEmailObserver;
use App\Observers\QrCodeGeoObserver;
use App\Observers\QrCodeObserver;
use App\Observers\QrCodeSmsObserver;
use App\Observers\QrCodeWifiObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    protected $observers = [
        User::class => UserObserver::class,
        QrCode::class => QrCodeObserver::class,
        QrCodeConfig::class => QrCodeConfigObserver::class,
        QrCodeEmail::class => QrCodeEmailObserver::class,
        QrCodeGeo::class => QrCodeGeoObserver::class,
        QrCodePhoneNumber::class => QrCodePhoneNumber::class,
        QrCodeSms::class => QrCodeSmsObserver::class,
        QrCodeWifi::class => QrCodeWifiObserver::class,
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
