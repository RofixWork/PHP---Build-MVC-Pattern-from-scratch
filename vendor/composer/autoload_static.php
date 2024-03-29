<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit912b5490b58eecbe14da61d087785d8f
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'H' => 
        array (
            'Hp\\Mvc2\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Hp\\Mvc2\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit912b5490b58eecbe14da61d087785d8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit912b5490b58eecbe14da61d087785d8f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit912b5490b58eecbe14da61d087785d8f::$classMap;

        }, null, ClassLoader::class);
    }
}
