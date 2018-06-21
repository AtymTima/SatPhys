<html>
<head>
    <title>Registration</title>
</head>
<body>  
    <?php
$Name = $_POST['Name'];
$Login = $_REQUEST['Login'];
$Password = $_REQUEST['Password'];
$PasswordAgain = $_REQUEST['PasswordAgain'];

$conn= new mysqli("127.0.0.1", "root", "", "data") or die ("Can't connect to db");
$queryvar = "INSERT INTO `sat` (`Name`, `Login`, `Password`, `PasswordAgain`) VALUES ('$Name', '$Login', '$Password', '$PasswordAgain')";

if ($Password == $PasswordAgain AND $conn->query($queryvar)== TRUE) {
//    echo "OK";
	header('Location: index.html');
} else {
    die('error' .$conn->error);
}
    
    ?>      
</body>
</html>