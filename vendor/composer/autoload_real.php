<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite6c6e67d1fd50f463a3c5834fa8f2ed7
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

        spl_autoload_register(array('ComposerAutoloaderInite6c6e67d1fd50f463a3c5834fa8f2ed7', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite6c6e67d1fd50f463a3c5834fa8f2ed7', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite6c6e67d1fd50f463a3c5834fa8f2ed7::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
