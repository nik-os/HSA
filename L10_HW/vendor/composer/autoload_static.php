<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bd33b9b1983e2667bf0d06701d0a58f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pheanstalk\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pheanstalk\\' => 
        array (
            0 => __DIR__ . '/..' . '/pda/pheanstalk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0bd33b9b1983e2667bf0d06701d0a58f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0bd33b9b1983e2667bf0d06701d0a58f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}