<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd28001332e3d1a62463b9fbd43b27909
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd28001332e3d1a62463b9fbd43b27909::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd28001332e3d1a62463b9fbd43b27909::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd28001332e3d1a62463b9fbd43b27909::$classMap;

        }, null, ClassLoader::class);
    }
}
