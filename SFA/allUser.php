<html>
<body>
<?php ob_start();?>
<?php
include("DeleteUser.html");
$objConnect = mysqli_connect("localhost","root","" , "sfa");
$strSQL = "SELECT * FROM account";
$objQuery = mysqli_query($objConnect,$strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
<tr>
<th width="91"> <div align="center">username </div></th>
<th width="98"> <div align="center">Status </div></th>
<th width="98"> <div align="center"></div></th>

</tr>

<?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>
<tr>
<td><div align="center"><?php echo $objResult["username"];?></div></td>
<td><div align="center"><?php echo $objResult["st"];?></td>

<center><form action="allUser.php" method="post" >
 <div class="cl">
 
   <td><div align="center"><button type="submit" name="activate" value=<?php echo $objResult["id"];?>>activate</button>
   &nbsp<button type="submit" name="delete" value=<?php echo $objResult["id"];?>>delete</button>
  

   </td>
 
</tr>
<?php
}
?>
</table>

<?php
 $resultUpdate="";
   if(isset($_POST['delete'])){
     $num = (int)$_POST['delete'];
     $sql = "UPDATE account Set st = 'invalid' WHERE id = '$num'";
     $resultUpdate = mysqli_query($objConnect,$sql);
     
}else if(isset($_POST['activate'])){
      $num = (int)$_POST['activate'];
      $sql = "UPDATE account Set st = 'valid' WHERE id = '$num'";
      $resultUpdate = mysqli_query($objConnect,$sql);
    }
    if($resultUpdate){
      echo '<script language="javascript">';
      echo 'alert("update successfully")';
      echo '</script>';
    }
mysqli_close($objConnect);
?>
</body>
</html>