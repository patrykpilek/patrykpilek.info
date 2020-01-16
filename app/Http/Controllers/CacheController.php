<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CacheController extends Controller
{
    public function cacheClear()
    {
        Artisan::call('cache:clear');
        return redirect()->back()->with('success', Artisan::output());
    }

    public function configClear()
    {
        Artisan::call('config:clear');
        return redirect()->back()->with('success', Artisan::output());
    }

    public function routeClear()
    {
        Artisan::call('route:clear');
        return redirect()->back()->with('success', Artisan::output());
    }

    public function viewClear()
    {
        Artisan::call('view:clear');
        return redirect()->back()->with('success', Artisan::output());
    }

    public function optimizeCache()
    {
        Artisan::call('optimize');
        return redirect()->back()->with('success', Artisan::output());
    }

    public function configCache()
    {
        Artisan::call('config:cache');
        return redirect()->back()->with('success', Artisan::output());
    }

    public function routeCache()
    {
        Artisan::call('route:cache');
        return redirect()->back()->with('success', Artisan::output());
    }
}
