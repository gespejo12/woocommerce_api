<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a4b620e726662f3401de4e84dd3e5a7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a4b620e726662f3401de4e84dd3e5a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a4b620e726662f3401de4e84dd3e5a7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
