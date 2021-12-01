<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09b4b3fe130c479e2db5cf1b30ba9f86
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09b4b3fe130c479e2db5cf1b30ba9f86::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09b4b3fe130c479e2db5cf1b30ba9f86::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09b4b3fe130c479e2db5cf1b30ba9f86::$classMap;

        }, null, ClassLoader::class);
    }
}
