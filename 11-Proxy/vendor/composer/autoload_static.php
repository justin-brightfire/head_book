<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5deda3470243fcbfd99174977d9c6476
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MG\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MG\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5deda3470243fcbfd99174977d9c6476::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5deda3470243fcbfd99174977d9c6476::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5deda3470243fcbfd99174977d9c6476::$classMap;

        }, null, ClassLoader::class);
    }
}
