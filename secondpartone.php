<!DOCTYPE html>
<html> 
<body>

<h1> Contacts </h1>

<?php

include('trueconnect.php');

?>

<?php
$sql = 'SELECT firstname,lastname FROM User';
mysql_select_db($database);
   $retval = mysql_query( $sql, $link );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
?>
   
 <table border: 1px solid black;
    border-collapse: collapse; style="width:50%">

  <tr bgcolor="#CCCCCC"> 
  <td width="100" height="25">First Name</td> &nbsp; <td width="100"  height="25">Last Name</td> <br> </tr>
  
   <?php
   while($row = mysql_fetch_array($retval, MYSQL_NUM)) { ?>
    <table border: 1px solid black;
    border-collapse: collapse; style="width:50%">

  <tr bgcolor="#CCCCCC"> 
 <td width="100" height="25"> <?php echo $row[0] ?> </td> &nbsp; <td width="100" height="25"> <?php echo $row[1] ?> </td> <br>
  </tr> 
       <?php }?>
   
   <?php
   mysql_free_result($retval);
   //echo "Fetched data successfully\n"; ?>
</table>  
</body>
</html> 
