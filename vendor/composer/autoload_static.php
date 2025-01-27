<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb06414eff53bc4729cc803e81851cdbf
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'ITFB\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ITFB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WP_Async_Request' => __DIR__ . '/..' . '/deliciousbrains/wp-background-processing/classes/wp-async-request.php',
        'WP_Background_Process' => __DIR__ . '/..' . '/deliciousbrains/wp-background-processing/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb06414eff53bc4729cc803e81851cdbf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb06414eff53bc4729cc803e81851cdbf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb06414eff53bc4729cc803e81851cdbf::$classMap;

        }, null, ClassLoader::class);
    }
}
