<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit313ce81e423a2cc093869364b0128e61
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Timedoor\\TmdBSA\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Timedoor\\TmdBSA\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit313ce81e423a2cc093869364b0128e61::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit313ce81e423a2cc093869364b0128e61::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
