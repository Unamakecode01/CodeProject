<?php
session_start();
$link = mysqli_connect("localhost","root","","sfa") or die("connected failed " . mysqli_connect_error())."<br>";
$username = $_SESSION['username'];
// echo "User: ". $username;

include("ChangePassword.html");
if(isset($_POST['saveBtn'])){
    $count=0;
    //curPass = current Password / old password
    $curPass = $_POST['curPass'];
    //newPass = new Password
    $newPass = $_POST['newPass'];
    //conPass = confirm new Password
    $conPass = $_POST['conPass'];
    $pattern = '/^.*(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).*$/';

    $q = "SELECT password,id FROM account WHERE username = '$username'";
    $result = mysqli_query($link,$q);
    $row = mysqli_fetch_array($result);
    $curPass = $row['password'];
    $id = $row['id'];

    if($curPass != "" && $newPass !="" && $conPass != ""){
       if($curPass == $_POST['curPass']){
            if($newPass==$conPass){
                if(strlen($newPass)>=8 && preg_match($pattern,$newPass)){
                    $sql = "INSERT INTO accountchange (Cid,id,changeDate,username,oldPassword,newPassword)
                    VALUES (' ','$id',now(),'$username','$curPass','$conPass')";
                    $s = "UPDATE account SET password = '$newPass' WHERE username = '$username'";
                    $resultInsert = mysqli_query($link,$sql);
                    $resultUpdate = mysqli_query($link,$s);
                    if($resultInsert&&$resultUpdate){
                        echo '<script language="javascript">';
                        echo 'alert("Change Password Successfully")';
                        echo '</script>';
                        //back to homepage
                    }
                }else{
                    echo '<script language="javascript">';
                    echo 'document.getElementById("message3").innerHTML="**Password  must" +"<br>"
                    +"-be a minimum 8 charecters long"+"<br>"
                    +"-contain at the least 1 upper case letter"+"<br>"
                    +"-contain at the least 1 numeric character"+"<br>"
                    +"-contain at the least 1 non-alphanumeric"';
                    echo '</script>';
                }
            }else{
                echo '<script language="javascript">';
                echo 'document.getElementById("message3").innerHTML="**New Password does not match!"';
                echo '</script>';
            }
        }else{
           
            echo '<script language="javascript">';
            echo 'document.getElementById("message3").innerHTML="**Current Password is incorrect"';
            echo '</script>';
        }
    }
}
if(isset($_POST['changeBtn'])){
    header("location: changePassword.php");
}

?>