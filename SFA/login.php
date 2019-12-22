<?php
session_start();
include("login.html");
$link = mysqli_connect("localhost","root","","sfa") or die("connected failed " . mysqli_connect_error())."<br>";

if(isset($_POST['username'])){

$count=0;
$username = $_POST['username'];
$password = $_POST['password'];
    
    $q = "SELECT * FROM account WHERE username = '$username' and password = '$password' and st = 'valid'";
    $result = mysqli_query($link,$q);
   if($result){
      while( $rows = mysqli_fetch_array($result)){
        $count++;
      }
      if($count>0){
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        session_write_close();
        header("location:artistForAdmin.php");
      } else{
        echo '<script language="javascript">';
        echo 'document.getElementById("message").innerHTML="Invalid login, please try again"';
        echo '</script>';
        echo "<meta http-equiv='refresh' content='1;URL=login.php>";
      }
   }
 
    $link->close();
}
?>