<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit01a76df7d65f3b9865c27bc3ad08103d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Autoload\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Autoload\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit01a76df7d65f3b9865c27bc3ad08103d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit01a76df7d65f3b9865c27bc3ad08103d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit01a76df7d65f3b9865c27bc3ad08103d::$classMap;

        }, null, ClassLoader::class);
    }
}
