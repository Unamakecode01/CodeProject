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
?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="MusicUpdate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="MusicUpdate.js" type="text/javascript"></script>

<div class="content">
  <h1>GOT7</h1>
</div>

<div class="navbar">
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <a href="#home">Home</a>
    <a href="#section1">Event</a>
    <a href="#section2">Music</a>
    <a href="#section3">Concert</a>    
</div>

<!-- <div class="main" id="section1">
    

</div> -->
<?php
    $sql = "SELECT id, eventName, dateEvent, location, linkURL FROM eventdb";
    $result = $conn->query($sql);
   
    if($result->num_rows > 0){
        // $url = isset($_GET['linkURLOfMusic']) ? $_GET['linkURLOfMusic'] : '';
        echo '<div class="main" id="section1">';
        echo '<h2>Event</h2>';

        echo "<div class=month>      
          <ul>
            <li class=prev>&#10094;</li>
            <li class=next>&#10095;</li>
            <li>
              M A Y<br>
              <span style=font-size:18px>2019</span>
            </li>
          </ul>
        </div>
        
        <ul class=weekdays>
          <li>Mo</li>
          <li>Tu</li>
          <li>We</li>
          <li>Th</li>
          <li>Fr</li>
          <li>Sa</li>
          <li>Su</li>
        </ul>
        
        <ul class=days>  
          <li><span class=pass>29</span></li>
          <li><span class=pass>29</span></li>
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li><span class=active>10</span></li>
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
        </ul>";
        // echo '<h2>Event</h2>';
        echo '<table id="customers">';
        echo '<tr>';
        echo '<th>No</th>';
        echo '<th>Event Name</th>';
        echo '<th>Date Of Event</th>';
        echo '<th>Location</th>';
        echo '<th>Link URL of Event</th>';
        echo '</tr>';
        while($row = $result->fetch_assoc()){
          echo "<tr>
                <td>$row[id]</td>
                <td>$row[eventName]</td>
                <td>$row[dateEvent]</td>
                <td>$row[location]</td>
                <td><a href=$row[linkURL]>Event Detail</a></td>
              </tr>";
        }
        echo '</table>'; 
        echo '</div>';
        
    } else{
        echo "0 results";
    }
?>
<?php
    $sql = "SELECT id, musicName, dateOfMusicReleased, linkURLOfMusic FROM music";
    $result = $conn->query($sql);
   
    if($result->num_rows > 0){
        // $url = isset($_GET['linkURLOfMusic']) ? $_GET['linkURLOfMusic'] : '';
        echo '<div class="main" id="section2">';
        echo '<h2>Music</h2>';
        echo '<table id="customers">';
        echo '<tr>';
        echo '<th>No</th>';
        echo '<th>Music Name</th>';
        echo '<th>Date Of Music Released</th>';
        echo '<th>Link URL of Music Video</th>';
        echo '</tr>';
        while($row = $result->fetch_assoc()){
          echo "<tr>
                <td>$row[id]</td>
                <td>$row[musicName]</td>
                <td>$row[dateOfMusicReleased]</td>
                <td><a href=$row[linkURLOfMusic]>MV</a></td>
              </tr>";
        }
        echo '</table>'; 
        echo '</div>';
        
    } else{
        echo "0 results";
    }
?>
<div class="main" id="section3">
    <h2>Concert</h2> 
</div>

