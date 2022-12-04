<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // 無名関数を使う場合
        // View::composer(
        //     'hello.index', function($view) {
        //         $view->with('view_message', 'composer message!');
        //     }
        // );

        // ビューコンポーザクラスを使う場合
        View::composer(
            'hello.index', 'App\Http\Composers\HelloComposer'
        );
    }
}
