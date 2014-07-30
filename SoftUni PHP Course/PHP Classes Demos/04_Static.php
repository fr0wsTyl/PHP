<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

class Foo{
    public  static  $myProp = "Static Property";
    public static function printProp(){
        echo self::$myProp;
    }
}
$booObj = new Foo();
$booObj::printProp(); //Output: Static Property

?>
</body>
</html>