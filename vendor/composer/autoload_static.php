<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20452b739bfc4e5bdd6fb4068763612d
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Michelf\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
    );

    public static $classMap = array (
        'ilMDViewerConfig' => __DIR__ . '/../..' . '/classes/class.ilMDViewerConfig.php',
        'ilMDViewerConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilMDViewerConfigGUI.php',
        'ilMDViewerPlugin' => __DIR__ . '/../..' . '/classes/class.ilMDViewerPlugin.php',
        'ilMDViewerPluginGUI' => __DIR__ . '/../..' . '/classes/class.ilMDViewerPluginGUI.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit20452b739bfc4e5bdd6fb4068763612d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20452b739bfc4e5bdd6fb4068763612d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit20452b739bfc4e5bdd6fb4068763612d::$classMap;

        }, null, ClassLoader::class);
    }
}
