<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInited841c47d1f4c70177407fe3af3a4971
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInited841c47d1f4c70177407fe3af3a4971', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInited841c47d1f4c70177407fe3af3a4971', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInited841c47d1f4c70177407fe3af3a4971::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
