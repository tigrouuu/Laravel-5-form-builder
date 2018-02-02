<?php

namespace App\Providers;

use App\Services\FormBuilder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        FormBuilder::boot();
    }

    public function register()
    {
        //
    }
}
