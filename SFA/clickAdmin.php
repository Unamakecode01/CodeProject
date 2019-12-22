<?php
session_start();
$username = $_SESSION['username'];
$servername = "localhost";
$dbuser ="root";
$dbpass ="";
$dbname="sfa";
$con = mysqli_connect($servername,$dbuser,$dbpass,$dbname);
if(!$con){
    die("Connection failed:".mysqli_connect_error());
}
$sql = "SELECT Id FROM artist WHERE artist.artistName='".$_POST["artist"]."'";
$results_array = array();
$result = mysqli_query($con,$sql);
$id;
if(empty($result))
{
    echo "afsz";
    return;
}
while ($row = $result->fetch_assoc()) {
    $results_array[] = $row;
}
foreach($results_array as $row){
    $id = $row["Id"];
}
if($username=="admin"){
    header("location: /sfa/MusicUpdate.php?id=$id");
}else{
    header("location: /sfa/update.php?id=$id");
}

?>