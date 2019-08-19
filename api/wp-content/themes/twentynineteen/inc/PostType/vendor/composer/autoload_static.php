<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd6a7dd4d4d6c2a0c46e881ddd4a0376
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PostTypes\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PostTypes\\' => 
        array (
            0 => __DIR__ . '/..' . '/jjgrainger/posttypes/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd6a7dd4d4d6c2a0c46e881ddd4a0376::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd6a7dd4d4d6c2a0c46e881ddd4a0376::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
