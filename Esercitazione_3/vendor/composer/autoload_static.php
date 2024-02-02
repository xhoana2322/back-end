<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit098ef0956da125b65d51fa5b06ea96ad
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'E' => 
        array (
            'Esercitazione1\\Esercitazione1\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Esercitazione1\\Esercitazione1\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit098ef0956da125b65d51fa5b06ea96ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit098ef0956da125b65d51fa5b06ea96ad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit098ef0956da125b65d51fa5b06ea96ad::$classMap;

        }, null, ClassLoader::class);
    }
}
