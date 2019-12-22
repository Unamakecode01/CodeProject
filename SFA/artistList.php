<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SCHEDULE FOLLOW ARTIST.</title>
 <link href="artistlist.css"rel ="stylesheet" type="text/css"/>
 <meta charset="utf-8">
 <meta name="viewport"content="width=device-width,initial-scale=1">
   </head> 
<body>
<div class="header">
<div>
<br>SCHEDULE FOLLOW ARTIST<br><br><br>
    </div>
    <button onclick="window.location.href='login.php'" name="login" value="" class="a">Login</button>
    
</div>
      <form action="click.php"method="post">
        <button class="button" name="artist" value="BTS"><img src="https://consequenceofsound.net/wp-content/uploads/2019/04/BTS.png?w=807"width="300"height="150">BTS</button>
        <button class="button" name="artist" value="GOT7"><img src="https://www.billboard.com/files/styles/1500x992_gallery/public/media/got7-2018-office-visit-billboard-1548.jpg"width="300"height="150">GOT7</button>
        <button class="button" name="artist" value="NCT127"><img src="https://dazedimg-dazedgroup.netdna-ssl.com/786/azure/dazed-prod/1250/4/1254017.jpg"width="300"height="150">NCT 127</button>
        <button class="button" name="artist" value="EXO"><img src="https://uploads.disquscdn.com/images/c432b35bba1b3832353ffd9d9bd11c0871ae7e866742bfb50c1e4c009ee16f30.jpg?w=800&h=555"width="300"height="150">EXO</button>
        <button class="button" name="artist" value="BLACKPINK"><img src="https://techcrunch.com/wp-content/uploads/2019/04/Screen-Shot-2019-04-09-at-1.30.37-PM.png?w=730&crop=1"width="300"height="150">BLACKPINK</button>
        <button class="button" name="artist" value="TWICE"><img src="https://img.kpopmap.com/2019/04/twice-world-tour-2019-cover.jpg"width="300"height="150">TWICE</button>
      </form>   
</body>
</html>

<?php
    $servername = "localhost";
    $username ="root";
    $password="";
    $dbname="sfa";
    //Create connection
    $conn = new mysqli($servername,$username,$password,$dbname);
    //Check connection
    if($conn ->connect_error){
        die("Connection failed: ".$conn_error);
    }
    $conn->close();

    $namArtist = "";
    if(isset($_POST['artist'])){
        $namArtist = $_POST['artist'];
        $sql = "SELECT artistName  FROM artist WHERE artistName = '$namArtist'";
        $result = $conn->query($sql);
    if($result ->num_rows >0){
        //output data of each row
         while(@$row = mysqli_fetch_array($result)){
        //    echo $row["artistName"];
          
        }
    }else{
        echo "0 result";
    }

}

?>