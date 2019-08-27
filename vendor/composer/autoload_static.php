<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit180881080a91ec19a4e49bfbe6c10250
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'team_extreme\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'team_extreme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit180881080a91ec19a4e49bfbe6c10250::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit180881080a91ec19a4e49bfbe6c10250::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}