<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\ServiceProvider;
/**
 * Composer to passing same data into all views
 */
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // pass left column in all views
        view()->composer(
            '*', 'App\Http\ViewComposers\LeftSideComposer'
        );

       // pass right column in all views or ['pages.index','hosters...']
        view()->composer(
            '*','App\Http\ViewComposers\RightSideComposer');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}