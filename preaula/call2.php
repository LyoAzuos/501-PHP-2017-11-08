<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

class Foo
{
    private $properties = [];

    public function __call($name, $arguments)
    {
        echo "<br>chamou o metodo {$name}";
        $property = strtolower($name);
        $property = str_replace('set', '', $property);
        $this->properties[$property] = $arguments[0];
    }

    public static function __callStatic($name, $arguments)
    {
        echo "<br>chamou o metodo estático {$name}";
    }

    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __get($name)
    {
        return $this->properties[$name];
    }
}

$foo = new Foo();
$foo->setSaldo(30);

echo '<pre>';
print_r($foo);

Foo::wathever();