<?php
     $servername = "localhost";
    //  $servername = "127.0.0.1";
     $username = "bilguun";
     $password = "e@UcUNp/d52r9l!g";
     $dbname = "dream house";

     $conn = new mysqli($servername, $username, $password, $dbname);

     if($conn -> connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM staff s";

    $result = $conn -> query($sql);
    
    if($result -> num_rows > 0)
    {
        $data = array();
        
        while($row = $result->fetch_assoc())
        {
            $data[] = $row;    
        }
        $json_data = JSON_encode($data);
    }
    
    echo $json_data;

?>