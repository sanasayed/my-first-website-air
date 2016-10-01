<html>
<head>
<style>
.error {color: #FF0000;}
h1{
  background: rgb(244, 36, 68);
  color: rgb(241, 243, 245);}

body{
 margin:0px;}

.header {
    background-color:rgb(209, 227, 239);
    color: rgb(76, 131, 171);
    -webkit-margin-before: 0em;
    -webkit-margin-after: 0em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    height:150;}
    
.nav {
    background: linear-gradient(rgb(231, 18, 55),rgb(187, 223, 100),rgb(231, 18, 55));
    border: 5px solid gray;
    margin: 0;
    text-align:center;
    height:1024px;
    line-height:25px;
    font-size:xx-large;}
    
input{
font-size: x-large;}
    
    
</style>
</head>
<body> 

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $usernameErr = $passwordErr= "";
$name = $email = $gender = $comment = $website = $username = $password= "";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
   if (empty($_GET["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_GET["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_GET["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_GET["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
    if (empty($_GET["username"])) {
     $usernameErr = "Username is required";
   } else {
            $username= $_GET['username'];

     if($username)
    {
        $connect =mysql_connect("localhost","root","")or die("Couldnt connect to database");
        mysql_select_db("fuser") or die("Coudnt find database");
    $result= mysql_query("SELECT * FROM `details` WHERE `username` LIKE '$username'");
        $numrows = mysql_num_rows($result);
        if($numrows!=0)
        {
            while($row = mysql_fetch_assoc($result))
            {
                $dbusername=$row['username'];
              
            }
            if($username == $dbusername)
            {
           $usernameErr = "Username already exists";
                $_SESSION['username']=$dbusername;
                }       
            }else
                $username= $_GET['username'] ; 
     }
    }
    if (empty($_GET["password"])) {
     $passwordErr = "Password is required";
   } else {
     $password = test_input($_GET["password"]);
    }
   
     
    if (empty($_GET["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_GET["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
    

   if (empty($_GET["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_GET["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<div class="header">
<a href="newflight.php">
<h1 style="font:700% Berlin Sans FB Demi"><img src="logo.png" alt="logo" width="145px"></a>SAYANE  AIRWAYS</h1>
    </div>
    <div class="nav">
<h2>Enter Details To Register</h2>
<p><span class="error">* required field.</span></p>
<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
 
   Username: <input type="text" name="username" value="<?php echo $username;?>">
   <span class="error">* <?php echo $usernameErr;?></span>
   <br><br>
         Password: <input type="password" name="password" value="<?php echo $password;?>">
   <span class="error">* <?php echo $passwordErr;?></span>
   <br><br>
    
 Gender:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
  <input name="sb" type="submit" style="background-color:rgb(185, 205, 242);color:rgb(163, 21, 53);;font-size:100% ;box-shadow: 10px 10px 5px #888888;font-family:Courier New;">
</form>
</div>
</body>
</html>