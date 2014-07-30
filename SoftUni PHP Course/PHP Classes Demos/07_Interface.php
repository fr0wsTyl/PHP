<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

interface iAnimal{
    public function talk();
    public  function  walk();
}

class Cat implements iAnimal{
    public function  talk(){
        return "Myau";
    }
    public  function  walk(){
        return "Cat is moved";
    }
}
$cat = new Cat();
echo $cat->talk();
echo "<br />";
echo $cat->walk();
echo "<br />";
?>

</body>
</html>