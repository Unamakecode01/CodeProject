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
if(isset($_POST['btnSave'])){
        $id = $_POST['id'];
        $Concert = $_POST['Concert'];
        $Date = $_POST['Date'];
        $Location = $_POST['Location'];
        $LinkSaleTicket = $_POST['LinkSaleTicket'];
// $sql = "INSERT INTO `concert` (`artist`, `concert` , `showDate`, `venue`, `linkURL`) VALUES ('".$_POST["id"]"','".$_POST["Concert"]"', '".$_POST["Date"]."', '".$_POST["Location"]."', '".$_POST["LinkSaleTicket"]."')";
$sql = "INSERT INTO concert (artist, concert, showDate, venue, linksale)
        VALUES ('$id', '$Concert','$Date', '$Location', '$LinkSaleTicket')";
$results_array = array();
$result = mysqli_query($conn,$sql);

// if(isset($_POST['btnSave'])){
//     $id = $_POST['id'];
//     $Concert = $_POST['Concert'];
//     $Date = $_POST['Date'];
//     $Location = $_POST['Location'];
//     $LinkSaleTicket = $_POST['LinkSaleTicket'];
//     echo "$id";

//     // $sql = "INSERT INTO concert (artist, concert, showDate, venue, linksale)
//     // VALUES ('$id', '$Concert','$Date', '$Location', '$LinkSaleTicket')";

//     // if($conn->query($sql) === TRUE){
//     //     echo "New record created successfully". "<br>";
//     // } else{
//     //     echo "Error: " . $sql . "<br>" . $conn->error. "<br>";
//     // }


// }
echo "<meta http-equiv='refresh' content='1;URL=formUDcon.php.php>";
}

?>