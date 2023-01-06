<?php

namespace CentoSquare\LaravelBladeComponents\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function dashboard(): View
    {
        return view('laravel-blade-components::components/dash/layout/master');
    }
}
