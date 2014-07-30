<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
class Foo{
    public function printObjName(){
        echo $this->getName();
    }
    private function getName(){
        return get_class($this);
    }
}
$fooObj = new Foo();
$fooObj->printObjName();//Output: Foo
//$fooObj->getName(); This will not work

?>
</body>
</html>