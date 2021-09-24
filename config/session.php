<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default  Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default  "driver" that will be used on
    | requests. By default, we will use the lightweight native driver but
    | you may specify any of the other wonderful drivers provided here.
    |
    | Supported: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "dynamodb", "array"
    |
    */

    'driver' => env('_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    |  Lifetime
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the 
    | to be allowed to remain idle before it expires. If you want them
    | to immediately expire on the browser closing, set that option.
    |
    */

    'lifetime' => env('_LIFETIME', 120),

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    |  Encryption
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your  data
    | should be encrypted before it is stored. All encryption will be run
    | automatically by Laravel and you can use the  like normal.
    |
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    |  File Location
    |--------------------------------------------------------------------------
    |
    | When using the native  driver, we need a location where 
    | files may be stored. A default has been set for you but a different
    | location may be specified. This is only needed for file s.
    |
    */

    'files' => storage_path('framework/s'),

    /*
    |--------------------------------------------------------------------------
    |  Database Connection
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis"  drivers, you may specify a
    | connection that should be used to manage these s. This should
    | correspond to a connection in your database configuration options.
    |
    */

    'connection' => env('_CONNECTION', null),

    /*
    |--------------------------------------------------------------------------
    |  Database Table
    |--------------------------------------------------------------------------
    |
    | When using the "database"  driver, you may specify the table we
    | should use to manage the s. Of course, a sensible default is
    | provided for you; however, you are free to change this as needed.
    |
    */

    'table' => 's',

    /*
    |--------------------------------------------------------------------------
    |  Cache Store
    |--------------------------------------------------------------------------
    |
    | While using one of the framework's cache driven  backends you may
    | list a cache store that should be used for these s. This value
    | must match with one of the application's configured cache "stores".
    |
    | Affects: "apc", "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('_STORE', null),

    /*
    |--------------------------------------------------------------------------
    |  Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | Some  drivers must manually sweep their storage location to get
    | rid of old s from storage. Here are the chances that it will
    | happen on a given request. By default, the odds are 2 out of 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    |  Cookie Name
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the cookie used to identify a 
    | instance by ID. The name specified here will get used every time a
    | new  cookie is created by the framework for every driver.
    |
    */

    'cookie' => env(
        '_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_'
    ),

    /*
    |--------------------------------------------------------------------------
    |  Cookie Path
    |--------------------------------------------------------------------------
    |
    | The  cookie path determines the path for which the cookie will
    | be regarded as available. Typically, this will be the root path of
    | your application but you are free to change this when necessary.
    |
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    |  Cookie Domain
    |--------------------------------------------------------------------------
    |
    | Here you may change the domain of the cookie used to identify a 
    | in your application. This will determine which domains the cookie is
    | available to in your application. A sensible default has been set.
    |
    */

    'domain' => env('_DOMAIN', null),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | By setting this option to true,  cookies will only be sent back
    | to the server if the browser has a HTTPS connection. This will keep
    | the cookie from being sent to you if it can not be done securely.
    |
    */

    'secure' => env('_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. You are free to modify this option if needed.
    |
    */

    'http_only' => true,

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | This option determines how your cookies behave when cross-site requests
    | take place, and can be used to mitigate CSRF attacks. By default, we
    | will set this value to "lax" since this is a secure default value.
    |
    | Supported: "lax", "strict", "none", null
    |
    */

    'same_site' => 'lax',

];
