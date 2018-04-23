<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Theme;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        $theme = Theme::getActive();
        View::composer(''.$theme.'::layout.blog.main', 'App\Http\ViewComposers\HeaderComposer');
        View::composer(''.$theme.'::layout.blog.menu', 'App\Http\ViewComposers\NavigationComposer');
        View::composer(''.$theme.'::widgets.disqus', 'App\Http\ViewComposers\DisqusComposer');
        View::composer(''.$theme.'::widgets.google_analytics', 'App\Http\ViewComposers\GoogleAnalyticsComposer');
        View::composer(''.$theme.'::widgets.post_bottom_scripts', 'App\Http\ViewComposers\PostBottomScriptsComposer');
        
    }

    /**
     * Register.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
