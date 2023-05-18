<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d69cda61f26d662f76c65b51a89aa65
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit8d69cda61f26d662f76c65b51a89aa65::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit8d69cda61f26d662f76c65b51a89aa65::$classMap;

        }, null, ClassLoader::class);
    }
}
