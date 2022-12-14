<?php

return array(

    /*
     |--------------------------------------------------------------------------
     | Site default title
     |--------------------------------------------------------------------------
     |
     */

    'title' => 'ビセンテゲート',

    /*
     |--------------------------------------------------------------------------
     | Limit title meta tag length
     |--------------------------------------------------------------------------
     |
     | To best SEO implementation, limit tags.
     |
     */

    'title_limit' => 100,

    /*
     |--------------------------------------------------------------------------
     | Limit description meta tag length
     |--------------------------------------------------------------------------
     |
     | To best SEO implementation, limit tags.
     |
     */

    'description_limit' => 300,

    /*
     |--------------------------------------------------------------------------
     | OpenGraph values
     |--------------------------------------------------------------------------
     |
     */

    'open_graph' => [
        'site_name' => 'BeCenteGate',
        'type' => 'website',
        'image' => env('APP_URL') . '/material/img/common/thumb_ogp01.jpg',
        'locale' => 'ja_JP'
    ],

    /*
     |--------------------------------------------------------------------------
     | Twitter Card values
     |--------------------------------------------------------------------------
     |
     */

    'twitter' => [
        'card' => 'summary_large_image',
        'creator' => '@BecenteG',
        'site' => '@BecenteG'
    ],

    /*
     |--------------------------------------------------------------------------
     | Supported languages
     |--------------------------------------------------------------------------
     |
     */

    'locale_url' => '[scheme]://[locale][host][uri]',

    /*
     |--------------------------------------------------------------------------
     | Supported languages
     |--------------------------------------------------------------------------
     |
     */

    'locales' => ['en', 'es'],
);
