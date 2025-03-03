<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

if (!function_exists('currency')) {
    function currency($amount, $decimals = 2, $currency = null)
    {
        $currency ??= config('app.currency');
        $symbols = [
            'KES' => 'KES ',
            'USD' => '$ ',
            'EUR' => '€ ',
            'GBP' => '£ ',
            'NGN' => '₦ ',
            // Add more currencies as needed
        ];

        $symbol = $symbols[$currency] ?? '$';
        return $symbol . number_format($amount, $decimals);
    }
}
if (!function_exists('display_currency')) {
    function display_currency($amount, $decimals = 2, $currency = null)
    {
        $currency ??= config('app.currency');
        $symbols = [
            'KES' => 'KES ',
            'USD' => '$ ',
            'EUR' => '€ ',
            'GBP' => '£ ',
            'NGN' => '₦ ',
            // Add more currencies as needed
        ];

        $symbol = $symbols[$currency] ?? '$';
        return $symbol . number_format($amount - 0.01, $decimals);
    }
}

if (!function_exists('getGuard')) {
    function getGuard()
    {
        // if (auth()->guard('web')->check() && Route::is('user.*') || Route::is('profile.*')) {
        //     return auth()->guard('web');
        // }

        // if (auth()->guard('admin')->check() && Route::is('admin.*')) {
        //     return auth()->guard('admin');
        // }

        // if (auth()->guard('employee')->check() && Route::is('employee.*')) {
        //     return auth()->guard('employee');
        // }

        // if (auth()->guard('affiliate')->check() && Route::is('affiliate.*')) {
        //     return auth()->guard('affiliate');
        // }

        // Add more guards as needed

        return auth(); // Default fallback
    }
}

if (!function_exists('getAuthUser')) {
    function getAuthUser()
    {
        return getGuard()->user();
    }
}

if (!function_exists('getLogoutRoute')) {
    function getLogoutRoute()
    {
        // $guards = ['affiliate', 'admin', 'employee', 'web']; // List all guards
        // $logoutRoute = 'javascript:void(0)'; // Default fallback

        // foreach ($guards as $guard) {
        //     if (auth()->guard($guard)->check()) {
        //         // Prioritize logout based on the current route
        //         if (Route::is($guard . '.*')) {
        //             switch ($guard) {
        //                 case 'affiliate':
        //                     return route('affiliate.logout');
        //                 case 'admin':
        //                     return route('admin.logout');
        //                 case 'employee':
        //                     return route('employee.logout');
        //                 default:
        //                     return route('logout');
        //             }
        //         }
        //         // Store a valid logout route if none match the current route
        //         switch ($guard) {
        //             case 'web':
        //                 $logoutRoute = route('logout');
        //                 break;
        //             case 'affiliate':
        //                 $logoutRoute = route('affiliate.logout');
        //                 break;
        //             case 'admin':
        //                 $logoutRoute = route('admin.logout');
        //                 break;
        //             case 'employee':
        //                 $logoutRoute = route('employee.logout');
        //                 break;
        //         }
        //     }
        // }

        // return $logoutRoute;

        return route('logout');
    }
}

if (!function_exists('generatePassword')) {
    function generatePassword()
    {
        return Str::random(12);
    }
}
