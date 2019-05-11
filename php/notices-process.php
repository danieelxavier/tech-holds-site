<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tech-holds-site";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $limit = 10;
    $offset = $_GET['offset'];


    $sql = "SELECT notice.id, notice.title, notice.body, notice.image, notice.release_date, user.name 
            FROM notice JOIN user ON notice.user_id = user.id 
            ORDER BY notice.release_date DESC 
            LIMIT {$limit} 
            OFFSET {$offset}";

    $result = $conn->query($sql);


    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $title = $row['title'];
        $body = $row['body'];
        $author = $row['name'];
        $date = $row['release_date'];
        $image = $row['image'];

        $return_arr[] = array("id" => $id,
            "title" => $title,
            "body" => $body,
            "author" => $author,
            "modifiedDate" => $date,
            "image" => $image);
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