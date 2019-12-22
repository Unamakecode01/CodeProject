<html>
<body>
    <?php
    include("CreateUser.html");
    $objConnect = mysqli_connect("localhost","root","" , "sfa");
    $strSQL = "SELECT * FROM account";
    $objQuery = mysqli_query($objConnect,$strSQL) or die ("Error Query [".$strSQL."]");
    if(isset($_POST['createbtn'])){
        $username = $_POST['username'];
        $pass = $_POST['psw'];
        $repass = $_POST['psw-repeat'];
        // $pass = preg_replace('#[^A-Za-z0-9]#i', '', $pass);
        // $repass = preg_replace('#[^A-Za-z0-9]#i', '', $repass);
        // $pass = strip_tags($pass);
        // $repass = strip_tags($repass);
            $st = "INSERT INTO account (id, username, password, st) VALUES('', '$username','$pass','valid')";
            $sql = mysqli_query($objConnect, $st);
        if($sql){
            echo '<script language="javascript">';
    echo 'alert("Create successfully")';
    echo '</script>';
        }
    }
    ?>
</body>
</html>