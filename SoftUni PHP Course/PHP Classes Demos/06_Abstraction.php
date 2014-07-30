<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

abstract class AbstractClass{
    abstract public function getValue2($prefix);

    public function printOut()
    {
        echo $this->getValue();
    }

    abstract protected function getValue();
}

class Class1 extends AbstractClass{
    public function getValue2($prefix)
    {
        return $prefix . "NAC1";
    }

    protected function getValue()
    {
        return "Class1";
    }
}

// continue from previous slide
class Class2 extends AbstractClass{
    public function getValue2($prefix)
    {
        return $prefix . "NAC2";
    }

    protected function getValue()
    {
        return "Class2";
    }
}

$class1 = new Class1();
$class1->printOut(); // "Class1";
echo "</br>";
echo $class1->getValue2('FOO'); // FOONAC1
echo "</br>";

$class2 = new Class2();
$class2->printOut(); // "Class2";
echo "</br>";
echo $class2->getValue2('FOO'); //FOONAC2
echo "</br>";

?>
</body>
</html>