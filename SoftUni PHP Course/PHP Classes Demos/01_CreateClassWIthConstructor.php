<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
class Foo{
    var $prop;
    function __construct ($boo) {
        $this->prop = $boo;
    }
    function boo () {
        echo $this->prop;}
}
$myFirstObject = new Foo("This is Property");
$myFirstObject->boo(); //Output: This is Property

?>
</body>
</html>