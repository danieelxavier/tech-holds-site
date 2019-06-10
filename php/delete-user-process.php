<?php

//    echo shell_exec("whoami")."<br><br>";

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {


    $id = $_POST["id"];


    $db = mysqli_connect("localhost:3306", "techho97_tech", "tech-holds2019", "techho97_blog");
    //excessão de disponibilidade do servidor do banco
    if (!$db) {
        $res_message = "O servidor do banco está indisponível";

        $res = array('status'=>"error", "message" => $res_message);
        echo json_encode($res);
        exit(0);
    }

    $sql = "UPDATE user SET is_active = 0 WHERE id='$id'";

    if(mysqli_query($db, $sql)){
        $res_message = "User deleted successfully.";
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