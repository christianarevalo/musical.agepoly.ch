<?php
/**
 * Created by PhpStorm.
 * User: christian
 * Date: 04.06.2016
 * Time: 17:38
 */

if (!function_exists('locale')) {
    /**
     * @return mixed
     */
    function locale()
    {
        return LaravelLocalization::getCurrentLocale();
    }
}

if (!function_exists('locales')) {
    /**
     * @return mixed
     */
    function locales()
    {
        return LaravelLocalization::getSupportedLocales();
    }
}

if (!function_exists('localeKeys')) {
    /**
     * @return mixed
     */
    function localeKeys()
    {
        return LaravelLocalization::getSupportedLanguagesKeys();
    }
}

if (!function_exists('i18n_url')) {
    /**
     * @param null  $locale
     * @param null  $url
     * @param array $attributes
     *
     * @return mixed
     */
    function i18n_url($url = null, $attributes = [])
    {
        return LaravelLocalization::getLocalizedURL(locale(), $url, $attributes);
    }
}

if (!function_exists('i18n_route')) {
    /**
     * Generate a URL to a named route.
     *
     * @param  string                    $name
     * @param  array                     $parameters
     * @param  bool                      $absolute
     * @param  \Illuminate\Routing\Route $route
     *
     * @return string
     */
    function i18n_route($name, $parameters = [], $absolute = true, $route = null)
    {
        return route(locale() . '.' . $name, $parameters, $absolute, $route);
    }
}