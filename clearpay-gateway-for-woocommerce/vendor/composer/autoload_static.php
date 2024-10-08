<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit572a4bc14795e0d1c8f8fa891bdb427c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Afterpay\\SDK\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Afterpay\\SDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/afterpay-global/afterpay-sdk-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit572a4bc14795e0d1c8f8fa891bdb427c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit572a4bc14795e0d1c8f8fa891bdb427c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit572a4bc14795e0d1c8f8fa891bdb427c::$classMap;

        }, null, ClassLoader::class);
    }
}
