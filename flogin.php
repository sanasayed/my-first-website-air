
<?php
session_start();
$username= $_GET['username'];
$password= $_GET['password'];
if($username && $password)
{
  $connect =mysql_connect("localhost","root","")or die("Couldnt connect to database");
  mysql_select_db("fuser") or die("Coudnt find database");
  $query=mysql_query("SELECT * FROM `details` WHERE `username` = '$username' AND `password` = '$password'");
  $numrows = mysql_num_rows($query);
  if($numrows!=0)
  {
    while($row = mysql_fetch_assoc($query))
    {
      $dbusername=$row['username'];
      $dbpassword=$row['password'];
    }
    if($username == $dbusername && $password== $dbpassword)
    {
      echo "Login succesful.<a href='confirm.php'>Click here to confirm the booking</a>";
      $_SESSION['username']=$dbusername;
    }
   }
   else
    die("Incorrect password or username");
   }
   else
    die("Pleaase enter username and password");
?>  