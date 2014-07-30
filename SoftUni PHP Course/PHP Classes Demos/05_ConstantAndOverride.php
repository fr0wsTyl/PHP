<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
class Foo{
    const myConst = 'value';

}
class Boo extends Foo{
    const myConst = 'value2';
    public function printConst()
    {
        echo $this::myConst;}
}
$test = new Boo();
$test->printConst();

?>
</body>
</html>