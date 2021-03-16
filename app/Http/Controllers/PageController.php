<?php

namespace App\Http\Controllers;

use App\Traits\DomainDetectable;
use App\Traits\PageTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Session;

class PageController extends Controller
{
    public function index(): Redirector|Application|RedirectResponse
    {
        return redirect(route('pages.home', ['locale' => Session::get('locale', 'en')]));
    }

    public function home($locale): Factory|View|Application
    {
        return self::renderPage('home', $locale);
    }

    public function markets($locale): View|Factory|Application
    {
        return self::renderPage('markets', $locale);
    }

    private static function renderPage(String $pageTag, $locale): Factory|View|Application
    {
        $page = PageTrait::getPageByTagAndLocale($pageTag, $locale, DomainDetectable::detectDomain());

        if ($page) {
            return view($page->view_path);
        }

        abort(404);
    }
}
