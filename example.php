<?php
//See this example live at https://vinephp-c9-jdenxrocks.c9.io/example.php
header("Content-type: text/html");
require("main.php");
if (isset($_POST['login'])) {
    $vine = new Vine($_POST['email'], $_POST['password']);
    if ($vine->success) {
        $data = $vine->userinfo();
        echo "Your userID for Vine is <span style=\"color:blue;\">" . $data['userid'] . "</span>";
        $vine->logout();
        die();
    }
    else {
        echo "That username and password combo was wrong. Try again please.<br>";
    }
}
?>
<form action="example.php" method="POST">
<label for="email">Email:</label>
<input type="text" id="email" name="email">
<br>
<label for="password">Password:</label>
<input type="password" id="password" name="password">
<br>
<input type="hidden" name="login" value="1">
<input type="submit" value="Submit">