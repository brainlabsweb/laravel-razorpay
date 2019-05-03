<?php

namespace Brainlabsweb\Razorpay;


use Illuminate\Support\ServiceProvider;
use Razorpay\Api\Api;

/**
 * Class RazorpayServiceProvider
 * @package Brainlabsweb\Razorpay
 * @author brainlabsweb <brainlabsweb@gmail.com>
 */
class RazorpayServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * register singleton for the razonpay api class
     */
    public function register()
    {
        $this->app->singleton(Api::class, function () {
            $config = app()->make('config');

            return new Api($config->get('razorpay.RAZOR_KEY'),$config->get('razorpay.RAZOR_SECRET'));
        });
    }

    /**
     * publish config file
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . './config/razorpay.php' => config_path('razorpay.php'),
        ], 'razorpay');
    }

}
