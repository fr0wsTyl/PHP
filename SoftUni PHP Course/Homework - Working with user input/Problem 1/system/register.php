<?php
$title = 'Register';
include 'header.php';
define('USER_MIN_LENGTH', 4);
define('USER_MAX_LENGTH', 20);
define('PASSWORD_MIN_LENGTH', 6);
define('PASSWORD_MAX_LENGTH', 25);
define('NAME_MIN_LENGTH', 2);
define('NAME_MAX_LENGTH', 20);
define('REGEX_EMAIL', '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/');

if ($_POST) {
    $error = false;
    $username = (string)$_POST['username'];
    $password = (string)$_POST['password'];
    $repeatPassword = (string)$_POST['repeat-password'];
    $secretQuestion = (string)$_POST['secret-question'];
    $secretAnswer = (string)$_POST['secret-answer'];
    $email = $_POST['email'];
    $firstName = (string)$_POST['first-name'];
    $lastName = (string)$_POST['last-name'];
    if (strlen($username) < USER_MIN_LENGTH || strlen($username) > USER_MAX_LENGTH) {
        echo 'Username must be between ' . USER_MIN_LENGTH . ' and ' . USER_MAX_LENGTH . ' characters' . '<br />';
        $error = true;
    }
    if (strlen($password) < PASSWORD_MIN_LENGTH || strlen($password) > PASSWORD_MAX_LENGTH) {
        echo 'Password must be between ' . PASSWORD_MIN_LENGTH . ' and ' . PASSWORD_MAX_LENGTH . ' characters' . '<br />';
        $error = true;
    }
    if ($repeatPassword !== $password) {
        echo 'Passwords are not same' . '<br />';
        $error = true;
    }
    if (strlen($firstName) < NAME_MIN_LENGTH || strlen($firstName) > NAME_MAX_LENGTH) {
        echo 'Invalid First Name' . '<br />';
        $error = true;
    }
    if (strlen($lastName) < NAME_MIN_LENGTH || strlen($lastName) > NAME_MAX_LENGTH) {
        echo 'Invalid Last Name' . '<br />';
        $error = true;
    }
    if (!(preg_match(REGEX_EMAIL, $email))) {
        echo 'Invalid Email Address' . '<br />';
        $error = true;
    }
    if (!(empty($_POST['sex']))) {
        $sex = $_POST['sex'];
    }
    if (!($sex == 'male' || $sex == 'female')) {
        echo 'EE haker smeshen ti vikna li hora ve bot';
        $error = true;
    }

    if ($error == false) {
        $result = $username . '---' . $password . '---' . $secretQuestion . '---' . $secretAnswer . '---' . $email . '---' . $firstName. '---'. $lastName . '---' . $sex . '---';
        if (file_put_contents('data.txt', $result, FILE_APPEND)) {
            echo 'Регистрацията е успешна.';
        }
    }
}
?>

<form method="post">
    <h1>Registration Form</h1>
    <label for="username">Username:</label>
    <input id="username" type="text" name="username"/><br/>
    <label for="password">Password:</label>
    <input id="password" type="password" name="password"/><br/>
    <label for="repeat-password">Repeat Password:</label>
    <input id="repeat-password" type="password" name="repeat-password"/><br/>
    <label for="secret-question">Secret Question:</label>
    <input id="secret-question" type="text" name="secret-question"/><br/>
    <label for="secret-answer">Secret Answer:</label>
    <input id="secret-answer" type="text" name="secret-answer"/><br/>
    <label for="email">Email:</label>
    <input id="email" type="email" name="email"/><br/>
    <label for="first-name">First Name:</label>
    <input id="first-name" type="text" name="first-name"/><br/>
    <label for="last-name">Last Name:</label>
    <input id="last-name" type="text" name="last-name"/><br/>
    <label for="sex">Sex:</label>
    <input class="sex" type="radio" name="sex" value="male"/>Male
    <input class="sex" type="radio" name="sex" value="female"/>Female<br/>
    <input type="submit" value="Register"/>
</form>
</body>
</html>