<?php

class Singleton
{
    public static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {

        if ( ! self::$instance) {
            self::$instance = array();
        }
        if ( ! self::$instance[static::class]) {
            self::$instance[static::class] = new static();
        }

        return self::$instance[static::class];
    }
}


class App extends Singleton
{
    public static $instance;
    public $DBManager;
    public $Config;

    public function __construct()
    {
    }
}


class Ap2 extends App
{
    public static $instance2;
    public $DBManager2;
    public $Config2;

    public function __construct()
    {
    }
}

$conn1            = App::getInstance();
$conn2            = App::getInstance();
$conn1::$instance = 33;
$conn3            = App::getInstance();
$conn4            = App::getInstance();
$conn5            = App::getInstance();

$app  = App::getInstance()->DBManager;
$app2 = Ap2::getInstance();



class SingletonClassic
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if ( ! self::$instance) {
            self::$instance = new SingletonClassic();
        }

        return self::$instance;
    }
}

//class A
//{
//    public $name = "1";
//
//    static function superEcho($this2){
//        $this2->name;
//    }
//
//    function superEcho2(){
//
//        echo $this->name;
//    }
//
//}
//
//function superEcho(){
//    echo 'super';
//}
//
//$A = new A();
//$A::superEcho($a);
//$A->superEcho2();