<?php

//DB Connection
$hostname="localhost";
$database="Info";
$username="root";
$password="root";

//Connection
$link = mysql_connect($hostname, $username, $password);
if (!$link) {
die('Connection failed: ' . mysql_error());
}
else{
     echo "Connection to MySQL server " .$hostname . " successful!
" . PHP_EOL;

echo mysql_ping() ? 'true' : 'false';
}

$db_selected = mysql_select_db($database, $link);
if (!$db_selected) {
    die ('Can\'t select database: ' . mysql_error());
}
else {
    echo 'Database ' . $database . ' successfully selected! <br>' ;
}
?>
<html>
<head>
<title>Add a Contact</title> 
</head>
<body>

Add a Contact | <a href="secondpartone.php">My Contacts</a>

<h1>Add a Contact</h1>

<!-- Sending form input back to addcontactbasic.php --!>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


<p>First name:
<input name="firstname" type="text" value=" <?php echo $firstname; ?> ">
<br>

<p>Last name:
<input name="lastname" type="text" value="<?php echo $lastname; ?>">
<br>

<input type="submit" name="addcontact" value="Add Contact">

<?php
// Inserting into DB
if(isset($_POST['addcontact']))
{
$firstname = $_POST['firstname'];
//$firstname = "Geetha";
//$lastname = "Shah";
$lastname = $_POST['lastname'];
}
if(!empty($firstname) && !empty($lastname)) 
{
$sql = "INSERT INTO User (firstname,lastname) VALUES ('".$firstname."','".$lastname."')";
//$sql = "INSERT INTO `Info`.`User` (`firstname`, `lastname`) VALUES ('Nivetha', 'Balasamy'), ('', '')";
mysql_select_db('Info');
$retval = mysql_query( $sql, $link );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($link);
   }
 ?>
 </form>
 </body>
 </html>

