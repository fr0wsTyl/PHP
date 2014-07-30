<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
class A {
    public $var1 = 1;
    public $var2 = 2;
    protected $var3 = 3;
    private $var4 = 4;
    function printIteration () {
        foreach ($this as $key=>$val)
            echo "$key : $val\n"; } }
$obj = new A();
// this prints only the public properties
foreach ($obj as $key=>$val)
    echo "$key : $val \n";
// this prints protected and private too
$obj->printIteration ();

?>

</body>
</html>