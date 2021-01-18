<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf03e53085e3f86b683c8e25da957c03
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf03e53085e3f86b683c8e25da957c03::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf03e53085e3f86b683c8e25da957c03::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
