<?php

//    echo shell_exec("whoami")."<br><br>";

session_start();

$date = new DateTime(null);
$currentTime = $date->getTimestamp();


if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

    $target_dir = "../uploads/";
    $base_name = basename($_FILES["form-image"]["name"]);

    $message_image = "";
    $has_image = 1;

    if($base_name != ""){
        $target_file = $target_dir . $base_name;
//        echo $target_file."<br>";
//        echo $base_name."<br>"."<br>";
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $base_name = $currentTime . "." . $imageFileType;
        $target_file = $target_dir . $base_name;

        $uploadOk = 1;

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["form-image"]["tmp_name"]);
            if($check !== false) {
                $message_image = "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $message_image = "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $message_image = "File already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["form-image"]["size"] > 500000) {
            $message_image = "Your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            $message_image = "Only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $message_image = "Sorry, your file was not uploaded. " . $message_image;

            $res = array('status'=>"error", "message" => $message_image);
            echo json_encode($res);
            exit(0);

            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["form-image"]["tmp_name"], $target_file)) {
                $message_image = "The file ". basename( $_FILES["form-image"]["name"]). " has been uploaded.";
            } else {
                $message_image = "Sorry, your file was not uploaded. there was an error uploading your file.";

                $res = array('status'=>"error", "message" => $message_image);
                echo json_encode($res);
                exit(0);
            }
        }
    }
    else{
        $message_image = "This notice don't have an image";
        $has_image = 0;
    }





    $title = $_POST["form-title"];
    $body = $_POST["form-body"];
    $author = $_SESSION['user_id'];

    echo $author."-------------";

    $title = stripcslashes($title);
    $body = stripcslashes($body);

    $res_message = "";
    $res_status = "";

    $db = mysqli_connect("localhost", "root", "", "tech-holds-site");
    //excessão de disponibilidade do servidor do banco
    if (!$db) {
        $res_message = "O servidor do banco está indisponível";

        $res = array('status'=>"error", "message" => $res_message);
        echo json_encode($res);
        exit(0);
    }

    // username and password sent from form

    $mytile = mysqli_real_escape_string($db, $title);
    $mybody = mysqli_real_escape_string($db, $body);

    if($has_image == 1) {
        $sql = "INSERT INTO notice (title, body, release_date, user_id, image) VALUES ('$mytile','$mybody','$currentTime','$author','$base_name')";
    }else{
        $sql = "INSERT INTO notice (title, body, release_date, user_id) VALUES ('$mytile','$mybody','$currentTime','$author')";
    }
//    $sql = "INSERT INTO notice (title, body, release_date, user_id) VALUES ('Noticias de Salvador','Salvador está um caos total, muitas pessoas','1557446845','1')";

    if(mysqli_query($db, $sql)){
        $res_message = "Records inserted successfully. Obs: ".$message_image;
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