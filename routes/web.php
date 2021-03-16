<?php

use App\Http\Controllers\PageController;
use App\Http\Middleware\DetectLocale;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware([DetectLocale::class])
    ->group(function () {
        Route::get('/', [PageController::class, 'index'])->name('pages.index');

        Route::prefix('/{locale}')
            ->group(function () {
                Route::get('/', [PageController::class, 'home'])->name('pages.home');

                // "Markets" Routes
                Route::get('/markets', [PageController::class, 'markets'])->name('pages.markets');
                Route::get('/forex', [PageController::class, 'forex'])->name('pages.forex');
                Route::get('/shares', [PageController::class, 'shares'])->name('pages.shares');
                Route::get('/metals', [PageController::class, 'metals'])->name('pages.metals');
                Route::get('/energies', [PageController::class, 'energies'])->name('pages.energies');
                Route::get('/indices', [PageController::class, 'indices'])->name('pages.indices');

                // "Trading Platforms" Routes
                Route::get('/trading-platforms', [PageController::class, 'tradingPlatforms'])->name('pages.trading-platforms');
                Route::get('/mt4', [PageController::class, 'mtFour'])->name('pages.mt4');
                Route::get('/mt5', [PageController::class, 'mtFive'])->name('pages.mt5');
                Route::get('/iress', [PageController::class, 'iress'])->name('pages.iress');

                // "Trading With Us" Routes
                Route::get('/trading-accounts', [PageController::class, 'tradingAccounts'])->name('pages.trading-accounts');
                Route::get('/deposit-and-withdrawal', [PageController::class, 'depositAndWithdrawal'])->name('pages.deposit-and-withdrawal');
                Route::get('/tmgm-pro', [PageController::class, 'tmgmPro'])->name('pages.tmgm-pro');

                // "Tools" Routes
                Route::get('/hubx', [PageController::class, 'hubx'])->name('pages.hubx');
                Route::get('/trade-with-australia-open', [PageController::class, 'tradeWithAO'])->name('pages.trade-with-ao');

                // "Partnership" Routes
                Route::get('/partnership-plans', [PageController::class, 'partnershipPlans'])->name('pages.partnership-plans');

                // "Company" Routes
                Route::get('/about', [PageController::class, 'about'])->name('pages.about');
                Route::get('/why-us', [PageController::class, 'whyUs'])->name('pages.why-us');
                Route::get('/regulations', [PageController::class, 'regulations'])->name('pages.regulations');
                Route::get('/legal-documents', [PageController::class, 'legalDocuments'])->name('pages.legal-documents');
                Route::get('/contact', [PageController::class, 'contact'])->name('pages.contact');
                Route::get('/australian-open-21', [PageController::class, 'aoTwentyOne'])->name('pages.ao-21');
            });
    });
