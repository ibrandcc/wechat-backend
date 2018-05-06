<?php

/*
 * This file is part of ibrand/wechat-backend.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('wechat_platform')) {
    /**
     * Generate the URL to a named route.
     *
     * @param string $name
     * @param array  $parameters
     * @param bool   $absolute
     *
     * @return string
     */
    function wechat_platform()
    {
        return app('wechat.platform');
    }
}

if (!function_exists('wechat_app_id')) {
    function wechat_app_id()
    {
        if (Session::has('account_app_id')) {
            return Session::get('account_app_id');
        }

        return null;
    }
}

if (!function_exists('wechat_id')) {
    function wechat_id()
    {
        if (Session::has('account_id')) {
            return intval(Session::get('account_id'));
        }

        return null;
    }
}

if (!function_exists('wechat_name')) {
    function wechat_name()
    {
        if (Session::has('account_name')) {
            return Session::get('account_name');
        }

        return null;
    }
}

if (!function_exists('wechat_account')) {
    function wechat_account()
    {
        return app('AccountService');
    }
}