<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae3a0ff5f066e54f1a5b2b220b9edda1
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hillel\\Homework5\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hillel\\Homework5\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitae3a0ff5f066e54f1a5b2b220b9edda1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae3a0ff5f066e54f1a5b2b220b9edda1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitae3a0ff5f066e54f1a5b2b220b9edda1::$classMap;

        }, null, ClassLoader::class);
    }
}
