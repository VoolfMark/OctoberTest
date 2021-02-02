<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit167d8a2813afba540c84adaa10e76ca4
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit167d8a2813afba540c84adaa10e76ca4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit167d8a2813afba540c84adaa10e76ca4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}