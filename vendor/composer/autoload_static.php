<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e99d96cb4475d4d5f39cd7d5041ec92
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stanleysie\\HkError\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stanleysie\\HkError\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e99d96cb4475d4d5f39cd7d5041ec92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e99d96cb4475d4d5f39cd7d5041ec92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e99d96cb4475d4d5f39cd7d5041ec92::$classMap;

        }, null, ClassLoader::class);
    }
}
