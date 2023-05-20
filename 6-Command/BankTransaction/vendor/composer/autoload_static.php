<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57bae98abfd0c13ee9bc8d928f4a60f5
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
            $loader->fallbackDirsPsr4 = ComposerStaticInit57bae98abfd0c13ee9bc8d928f4a60f5::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit57bae98abfd0c13ee9bc8d928f4a60f5::$classMap;

        }, null, ClassLoader::class);
    }
}
