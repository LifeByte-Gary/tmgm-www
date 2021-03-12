<?php

namespace App\Http\Controllers;

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

    public function home(Request $request, $locale): Factory|View|Application
    {
        $page = PageTrait::getPageByTagAndLocale('home', $locale, detect_site_domain());

        if ($page) {
            return view($page->view_path, ['pageId' => $page->id]);
        }
    }
}
