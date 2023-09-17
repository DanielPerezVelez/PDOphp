<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9fde7c0b311e6649acd78d4da521117
{
    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xelanid\\Pdophp\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xelanid\\Pdophp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite9fde7c0b311e6649acd78d4da521117::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9fde7c0b311e6649acd78d4da521117::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite9fde7c0b311e6649acd78d4da521117::$classMap;

        }, null, ClassLoader::class);
    }
}