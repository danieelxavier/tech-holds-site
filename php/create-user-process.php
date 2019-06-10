<?php

//    echo shell_exec("whoami")."<br><br>";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {


    $name = $_POST["form-name"];
    $email = $_POST["form-email"];
    $password = $_POST["form-password"];

    $res_message = "";
    $res_status = "";

    $db = mysqli_connect("localhost:3306", "techho97_tech", "tech-holds2019", "techho97_blog");
    //excessão de disponibilidade do servidor do banco
    if (!$db) {
        $res_message = "O servidor do banco está indisponível";

        $res = array('status'=>"error", "message" => $res_message);
        echo json_encode($res);
        exit(0);
    }

    // username and password sent from form

    $name = mysqli_real_escape_string($db, $name);
    $email = mysqli_real_escape_string($db, $email);
    $password = mysqli_real_escape_string($db, $password);

    $sql = "INSERT INTO user (user.name, user.email, user.type, user.passcode, user.is_active) VALUES ('$name','$email',1,'$password',1)";

    if(mysqli_query($db, $sql)){
        $res_message = "User inserted successfully.";
        $res_status = "success";
    } else{
        $res_message = "ERROR: Could not able to execute $sql. " . mysqli_error($db);
        $res_status = "error";
    }

// Close connection
    mysqli_close($db);

    $res = array('status'=>$res_status, "message" => $res_message);
    echo json_encode($res);

}
?>