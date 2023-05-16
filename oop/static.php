<?php

class staticMethod 
{
    public static function staticfunc()
    {
        echo "Ini adalah static function method";
    }
}
staticMethod::staticfunc();
echo "<br>";

class staticMethod2
{
    public static $oop = "Ini adalah metode statik metode versi v2";
    public static function staticFunc2()
    {
        self::$oop;
    }
}
staticMethod2::staticFunc2();