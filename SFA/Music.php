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
// echo "Connected succesfully"."<br>";
// mysqli_set_charset($conn, "utf8");
$sql = "SELECT Id,artistName FROM artist WHERE artist.Id='".$_GET["id"]."'";
$results_array = array();
$result = mysqli_query($conn,$sql);
$name;
if(empty($result))
{
    echo "afsz";
    return;
}
while ($row = $result->fetch_assoc()) {
    $results_array[] = $row;
}

foreach($results_array as $row){
	$name = "$row[artistName]";
}
   
?>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Music.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="MusicUpdate.js" type="text/javascript"></script>

<div class=content>
    <h1><?php echo "&nbsp;$name"; ?></h1>
</div>

<div class="navbar">
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <a href="artistList.php">Home</a>
    <a href="#section1">Event</a>
    <a href="#section2">Music</a>
    <a href="#section3">Concert</a>    
</div>

<div class="main" id="section1">
    <h2>&nbsp;&nbsp;Event</h2>

<div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      M A Y<br>
      <span style="font-size:18px">2019</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li><span class="pass">29</span></li>
  <li><span class="pass">29</span></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

</div>
<?php
$conn = new mysqli($servername, $username , $password, $dbname);
mysqli_set_charset($conn, "utf8");
    $sql = "SELECT id, musicName, dateOfMusicReleased, linkURLOfMusic FROM music WHERE music.AID='".$_GET["id"]."'";
    $result = $conn->query($sql);

        echo '<div class="main" id="section2">';
        echo '<h2>&nbsp;&nbsp;Music</h2>';
        echo '<table id="customers">';
        echo '<tr>';
        // echo '<th>No</th>';
        echo '<th>Music Name</th>';
        echo '<th>Date Of Music Released</th>';
        echo '<th>Link URL of Music Video</th>';
        echo '</tr>';
    if($result->num_rows > 0){
        
        while($row = $result->fetch_assoc()){
          echo "<tr>
                <td>$row[musicName]</td>
                <td>$row[dateOfMusicReleased]</td>
                <td><a href=$row[linkURLOfMusic]>MV</a></td>
              </tr>";
        }
        
    } else{
        echo "0 results";
    }

    echo '</table>'; 
    echo '</div>';
    $conn->close();
?> 
<?php
$conn = new mysqli($servername, $username , $password, $dbname);
mysqli_set_charset($conn, "utf8");
$sql = "SELECT artist,conname,showdate,venue,linksale FROM concert WHERE concert.artist='".$_GET["id"]."'";
$result = $conn->query($sql);

$ansData = array();
echo '<div class="main" id="section3">';
        echo '<h2>&nbsp;&nbsp;Concert</h2>';
        echo '<table id="customers">';
        echo '<tr>';
        // echo '<th>No</th>';
        echo '<th>concert</th>';
        echo '<th>showdate</th>';
        echo '<th>venue</th>';
        echo '<th>link for sale ticket</th>';
        echo '</tr>';

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
    echo "<tr>
          <td>$row[conname]</td>
          <td>$row[showdate]</td>
          <td>$row[venue]</td>
          <td><a href=$row[linksale]><input type='button' value='Description'></a></td>
        </tr>";
  }
  
} else {
	echo "0 results";
}
echo '</table>'; 
echo '<br><br>';
echo '</div>';

$conn->close();
?>