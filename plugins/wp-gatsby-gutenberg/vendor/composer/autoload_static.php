<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0cfb58398052e50dda3e9dded49931ac
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GatsbyWordpressGutenberg\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GatsbyWordpressGutenberg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'WPGatsbyGutenberg\\Admin\\Editor' => __DIR__ . '/../..' . '/src/Admin/Editor.php',
        'WPGatsbyGutenberg\\Admin\\Settings' => __DIR__ . '/../..' . '/src/Admin/Settings.php',
        'WPGatsbyGutenberg\\Preview\\Preview' => __DIR__ . '/../..' . '/src/Preview/Preview.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0cfb58398052e50dda3e9dded49931ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0cfb58398052e50dda3e9dded49931ac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0cfb58398052e50dda3e9dded49931ac::$classMap;

        }, null, ClassLoader::class);
    }
}
