<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd342d05c4b74225c6ed6a717c44d1a99
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd342d05c4b74225c6ed6a717c44d1a99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd342d05c4b74225c6ed6a717c44d1a99::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
