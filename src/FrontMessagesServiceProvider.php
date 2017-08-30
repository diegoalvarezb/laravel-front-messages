<?php

namespace Diegoalvarezb\FrontMessages;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

/**
 * Front messages service provider.
 *
 * @package Diegoalvarezb\FrontMessages
 */
class FrontMessagesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front_messages', function ($view) {

            // set general messages (move flash session messages to template parameters)
            // this simplifies the merge between flash messages (next request) and current request messages
            $dangerMessageList = array_merge((array)session()->get('front_messages.danger'), (array)$view->errors->all());

            $view->with('front_messages', [
                'info' => session()->get('front_messages.info'),
                'success' => session()->get('front_messages.success'),
                'warning' => session()->get('front_messages.warning'),
                'danger' => $dangerMessageList,
            ]);

            session()->forget('front_messages.info');
            session()->forget('front_messages.success');
            session()->forget('front_messages.warning');
            session()->forget('front_messages.danger');

        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
