<?php

namespace App\Exceptions;

use App;
use App\Traits\DomainDetectable;
use App\Traits\LocaleTrait;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Session;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (Throwable $e, $request) {
            // Localization
            // Get all active locales.
            $activeLocales = LocaleTrait::getActiveLocalesByDomain(DomainDetectable::detectDomain());

            // Get user prefer locale stored in session.
            $preferLocale = Session::get('locale') ? Session::get('locale') : 'en';

            App::setLocale(isset($activeLocales[$preferLocale]) ? $activeLocales[$preferLocale]['code'] : 'en');
        });
    }
}
