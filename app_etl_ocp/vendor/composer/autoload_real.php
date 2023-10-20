<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite3f3ce452d0dd72903394b46bf995f19
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

        spl_autoload_register(array('ComposerAutoloaderInite3f3ce452d0dd72903394b46bf995f19', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite3f3ce452d0dd72903394b46bf995f19', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite3f3ce452d0dd72903394b46bf995f19::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}