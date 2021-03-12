<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function index(): Redirector|Application|RedirectResponse
    {
        return redirect(route('pages.home', ['locale' => App::currentLocale()]));
    }

    public function home(Request $request): Factory|View|Application
    {
        return view('home');
    }
}
