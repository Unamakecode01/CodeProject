<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sfa";
    
    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    //  echo "Connected succesfully"."<br>";

    include("AddMusicReleased.html");

    if(isset($_POST['submit'])){
        $count = 0;
        $AID = $_POST['AID'];
        $musicName = $_POST['musicName'];
        $date = $_POST['date'];
        $linkUrl = $_POST['linkUrl'];

        $sql = "INSERT INTO music (id, AID, musicName, dateOfMusicReleased, linkURLOfMusic)
        VALUES ('', '$AID','$musicName', '$date', '$linkUrl')";

        if($conn->query($sql) === TRUE){
            echo "New record created successfully". "<br>";
        } else{
            echo "Error: " . $sql . "<br>" . $conn->error. "<br>";
        }
    }
?>