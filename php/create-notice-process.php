<?php


$date = new DateTime(null);
$currentTime = $date->getTimestamp();


if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

//    echo shell_exec("whoami")."<br><br>";

    $target_dir = "../uploads/";
    $base_name = basename($_FILES["form-image"]["name"]);
    $target_file = $target_dir . $base_name;
//    echo $target_file."<br>";
//    echo $target_dir."<br>"."<br>";
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $base_name = $currentTime . "." . $imageFileType;
    $target_file = $target_dir . $base_name;

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["form-image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["form-image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["form-image"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["form-image"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }



    $title = $_POST["form-title"];
    $body = $_POST["form-body"];
    $author = 1;

    $title = stripcslashes($title);
    $body = stripcslashes($body);


    $db = mysqli_connect("localhost", "root", "", "tech-holds-site");
    //excessão de disponibilidade do servidor do banco
    if (!$db) {
        die("<p>O servidor do banco está indisponível</p>");
    }

    // username and password sent from form

    $mytile = mysqli_real_escape_string($db, $title);
    $mybody = mysqli_real_escape_string($db, $body);

    if($uploadOk == 1) {
        $sql = "INSERT INTO notice (title, body, release_date, user_id, image) VALUES ('$mytile','$mybody','$currentTime','$author','$base_name')";
    }else{
        $sql = "INSERT INTO notice (title, body, release_date, user_id) VALUES ('$mytile','$mybody','$currentTime','$author')";
    }
//    $sql = "INSERT INTO notice (title, body, release_date, user_id) VALUES ('Noticias de Salvador','Salvador está um caos total, muitas pessoas','1557446845','1')";

    $res_message = "";
    if(mysqli_query($db, $sql)){
        $res_message = "Records inserted successfully.";
    } else{
        $res_message = "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    }

// Close connection
    mysqli_close($db);

    $res = array("message" => $res_message);

    echo json_encode($res);
}
?>