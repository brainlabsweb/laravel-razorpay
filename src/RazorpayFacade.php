<?php
namespace Brainlabsweb\Razorpay;

use Illuminate\Support\Facades\Facade;

class RazorpayFacade extends Facade
{
    /**
     * Facade for Razorpay
     *
     * @author brainlabsweb <brainlabsweb@gmail.com>
     * @package Razorpay
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'razorpay';
    }
}
