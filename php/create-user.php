<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    $login = $_POST["form-email"];
    $passcode = $_POST["form-password"];

    $login = stripcslashes($login);
    $passcode = stripcslashes($passcode);

    $passcode = 'e8d95a51f3af4a3b134bf6bb680a213a';

    $db = mysqli_connect("localhost", "root", "", "tech-holds-site");
    //excessão de disponibilidade do servidor do banco
    if (!$db) {
        die("<p>O servidor do banco está indisponível</p>");
    }

    // username and password sent from form

    $myusername = mysqli_real_escape_string($db, $login);
    $mypassword = mysqli_real_escape_string($db, $passcode);

    $sql = "SELECT * FROM user WHERE email = '$myusername' and passcode = '$mypassword'";
    $result = mysqli_query($db, $sql) or die("Failed to query database.");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
//        $_SESSION['start'] = $myusername;
        echo "Welcome ".$row['name'];

//        header("location: ../console/index.php");
    } else {
        $error = "Your Login Name or Password is invalid";
        echo $error;
    }
}
?>