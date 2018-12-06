<?php
namespace LumenVendorPublish;

use Illuminate\Support\ServiceProvider;

class LumenVendorPublishServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->commands(\LumenVendorPublish\VendorPublishCommand::class);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
