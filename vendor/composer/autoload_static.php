<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9767c7c74a2aea754f8b01d32e5af6ce
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Payapi\\PaymentsSdk\\' => 19,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Payapi\\PaymentsSdk\\' => 
        array (
            0 => __DIR__ . '/..' . '/payapi/payapi-sdk-php/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9767c7c74a2aea754f8b01d32e5af6ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9767c7c74a2aea754f8b01d32e5af6ce::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}