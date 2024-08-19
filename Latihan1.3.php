<?php
class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class strawberry extends Fruit
{
    public function message()
    {
        echo "Am i a fruit or a berry?";
    }
}
$strawberry = new strawberry("strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>