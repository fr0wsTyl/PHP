<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

class Animal{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function talk()    {
        echo "I can't talk";
    }
}

class Cat extends Animal{
    function __construct($name, $age)
    {
        parent::__construct($name, $age);
    }

    public function talk()
    {
        echo "Myauu";
    }
}

$cat = new Cat("Pesho", 3);
echo "Cat Name: " . $cat->name;
echo "</br>";
echo "Cat Age: " . $cat->age;
echo "</br>";
echo "Cat say : ";
echo $cat->talk();
echo "</br>";

?>
</body>
</html>