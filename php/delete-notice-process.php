<?php

//    echo shell_exec("whoami")."<br><br>";

session_start();

$date = new DateTime(null);
$currentTime = $date->getTimestamp();


if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {


    $id = $_POST["id"];


    $db = mysqli_connect("localhost", "root", "", "tech-holds-site");
    //excessão de disponibilidade do servidor do banco
    if (!$db) {
        $res_message = "O servidor do banco está indisponível";

        $res = array('status'=>"error", "message" => $res_message);
        echo json_encode($res);
        exit(0);
    }

    $sql = "DELETE FROM notice WHERE id='$id'";

    if(mysqli_query($db, $sql)){
        $res_message = "Notice deleted successfully.";
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