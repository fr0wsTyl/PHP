<?php
    $title = 'Login System';
    include 'system/header.php';
?>
<form action="system/login.php" method="post">
    <label for="username">Username:</label>
    <input id="username" type="text" name="username" /><br />

    <label for="password">Password:</label>
    <input id="password" type="password" name="password"><br />

    <input type="submit" value="Submit" />
    <a href="system/register.php">Register</a>
</form>
</body>
</html>