<!DOCTYPE html>
<html> 
<body>

<h1> Contacts </h1>

<?php

include('connectcontacts.php');

?>

<?php
$sql = 'SELECT id,firstname,lastname,phone,address,email,category,yearofbirth FROM User';
mysql_select_db($database);
   $retval = mysql_query( $sql, $link );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
?>
   
 <table border: 1px solid black;
    border-collapse: collapse; style="width:50%">

<!--  <tr bgcolor="#CCCCCC"> 
  <td width="" height="25">First Name</td> &nbsp; <td width=""  height="25">Last Name</td> <br> </tr> --!>
  
 <!-- open table rows to include table header --!>
<tr bgcolor="#CCCCCC">
<th width="50" height="25">id</th>
<th width="50" height="25">First name</th>
<th width="50" height="25">Last name</th>
<th width="50" height="25">Phone</th>
<th width="50" height="25">Address</th>
<th width="50" height="25">Email</th>
<th width="50" height="25">Category</th>
<th width="50" height="25">Year of Birth</th>
</tr> 
  
   <?php
   while($row = mysql_fetch_array($retval, MYSQL_NUM)) { ?>
    <table border: 1px solid black;
    border-collapse: collapse; style="width:50%">
    
<tr bgcolor="#CCCCCC"> 
 <td width="50" height="25"> <?php echo $row[0] ?> </td> &nbsp; 
 <td width="50" height="25"> <?php echo $row[1] ?> </td>
 <td width="50" height="25"> <?php echo $row[2] ?> </td>
 <td width="50" height="25"> <?php echo $row[3] ?> </td>
 <td width="50" height="25"> <?php echo $row[4] ?> </td>
 <td width="50" height="25"> <?php echo $row[5] ?> </td>
 <td width="50" height="25"> <?php echo $row[6] ?> </td>
 <td width="50" height="25"> <?php echo $row[7] ?> </td>
 <br>
</tr> 
 <?php }?>
   
   <?php
   mysql_free_result($retval);
   //echo "Fetched data successfully\n"; ?>
</table>  
</body>
</html> 
