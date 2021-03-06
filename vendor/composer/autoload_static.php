<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcea14af9821746a0ae92e26287d40a1f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcea14af9821746a0ae92e26287d40a1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcea14af9821746a0ae92e26287d40a1f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcea14af9821746a0ae92e26287d40a1f::$classMap;

        }, null, ClassLoader::class);
    }
}
