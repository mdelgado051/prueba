<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
{
  $this->app->bind('path.public',function(){
  return'/home/ajk8hwhd19s8/public_html';
  });
}
}
