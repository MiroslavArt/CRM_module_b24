<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit882a66cbf2e79d1b97ae0f3a7173979a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tn\\Plan\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tn\\Plan\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit882a66cbf2e79d1b97ae0f3a7173979a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit882a66cbf2e79d1b97ae0f3a7173979a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}