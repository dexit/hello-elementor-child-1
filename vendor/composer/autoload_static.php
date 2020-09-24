<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite76bf496dd9849bec2a94573770b7fa3
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OomphInc\\ComposerInstallersExtender\\' => 36,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OomphInc\\ComposerInstallersExtender\\' => 
        array (
            0 => __DIR__ . '/..' . '/oomphinc/composer-installers-extender/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite76bf496dd9849bec2a94573770b7fa3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite76bf496dd9849bec2a94573770b7fa3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
