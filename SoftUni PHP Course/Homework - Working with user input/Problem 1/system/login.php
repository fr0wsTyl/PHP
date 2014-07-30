<meta charset="utf-8" />
<?php
$result=file_get_contents('data.txt');
$resultArr = explode('---', $result);
if($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    for($i = 0; $i < count($resultArr); $i+=8) {
        if($resultArr[$i] == $username && $resultArr[$i+1] == $password) {
            echo 'Здравей отново '.$username.' :)';
            break;
        }
    }
}
?>