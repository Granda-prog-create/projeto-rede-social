<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf565f2bd84510e24722894e2ae6283c
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DankiCode\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DankiCode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/DankiCode',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf565f2bd84510e24722894e2ae6283c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf565f2bd84510e24722894e2ae6283c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf565f2bd84510e24722894e2ae6283c::$classMap;

        }, null, ClassLoader::class);
    }
}
