<html>
<head>
    <title>Login Form</title>
</head>
<body>

<?php

if (!isset($_POST['submit'])){
?>
<!-- The HTML login form -->

<?php
} else {
//    require_once("registration.php");
    $conn = mysqli("127.0.0.1", "root", "", "data");
	$db = mysql_select_db("sat") or die(mysql_error());
    # check connection
    if ($conn->connect_errno) {
        echo "<p>MySQL error no {$conn->connect_errno} : {$conn->connect_error}</p>";
        exit();
    }

    $Login = $_POST['Login'];
    $Password = $_POST['Password'];

    $sql = "SELECT * from sat WHERE Login LIKE '{$Login}' AND Password LIKE '{$Password}' LIMIT 1";
    $result = $conn->query($queryvar);
    if (!$result->num_rows == 1) {
        echo "<p>Invalid username/password combination</p>";
    } else {
        echo "<p>Logged in successfully</p>";
        file_get_contents('main.html');
    }
}
?>      
</body>
</html>