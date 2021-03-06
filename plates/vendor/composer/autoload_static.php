<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78509a50da7bb74d572e03f5f8083c18
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78509a50da7bb74d572e03f5f8083c18::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78509a50da7bb74d572e03f5f8083c18::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78509a50da7bb74d572e03f5f8083c18::$classMap;

        }, null, ClassLoader::class);
    }
}
