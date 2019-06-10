<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $servername = "localhost:3306";
    $username = "techho97_tech";
    $password = "tech-holds2019";
    $dbname = "techho97_blog";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT user.id, user.name, user.email 
            FROM user 
            WHERE user.is_active = 1 AND user.id = '$id'
            ORDER BY user.id";
    }
    else if(isset($_GET['email'])){
        $email = $_GET['email'];
        $email = mysqli_real_escape_string($conn, $email);

        $sql = "SELECT user.id, user.name, user.email 
            FROM user 
            WHERE user.is_active = 1 AND user.email = '$email'
            ORDER BY user.id";
    }
    else{
        $sql = "SELECT user.id, user.name, user.email 
            FROM user 
            WHERE user.is_active = 1
            ORDER BY user.id";
    }

    $result = $conn->query($sql);

    $return_arr = [];
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];

        $return_arr[] = array("id" => $id,
            "name" => $name,
            "email" => $email);
    }


//    if ($result->num_rows > 0) {
//        // output data of each row
//        while($row = $result->fetch_assoc()) {
//            print_r($row);
//        }
//
//    } else {
//        echo "0 results";
//    }
    $conn->close();
    echo json_encode($return_arr);
}
?>