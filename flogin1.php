<html> 
<head>
<style>
h1{
  background: rgb(244, 36, 68);
  color: rgb(241, 243, 245);
  text-align: center;
  padding: 0px;
  margin: 0px;
  -webkit-margin-before: 0em;
  -webkit-margin-after: 0em;
  -webkit-margin-start: 0px;
  -webkit-margin-end: 0px;}
    
h2{
  background-color:rgb(209, 227, 239);
  color: rgb(76, 131, 171);
  -webkit-margin-before:0px;
  -webkit-margin-before: 0em;
  -webkit-margin-after: 0em;
  -webkit-margin-start: 0px;
  -webkit-margin-end: 0px;
  text-align: center;}

.header{
   background-color:rgb(209, 227, 239);
   color: rgb(76, 131, 171);
   -webkit-margin-before: 0em;
   -webkit-margin-after: 0em;
   -webkit-margin-start: 0px;
   -webkit-margin-end: 0px;}
    
.nav{
    background: linear-gradient(rgb(231, 18, 55),rgb(187, 223, 100),rgb(231, 18, 55));
    border: 5px solid gray;
    margin: 0;
    text-align:center;
    height:1024px;
    line-height:50px;
    font-size:x-large;}

input{
    font-size:80%;}

</style>
</head>
    
<body>
<a href="newflight.php">
<h1 style="font:700% Berlin Sans FB Demi"><img src="logo.png" alt="logo" width="145px"></a>SAYANE  AIRWAYS</h1>
        
<div class="header">
<h2>LOGIN</h2></div>
        
<div class="nav">
<form action="flogin.php "method="GET">Username :<input type="text"name="username" id="username"><br>
Password :<input type="password" id="password" name="password"><br>
<input name="sb" type="submit" style="background-color:rgb(185, 205, 242);color:rgb(163, 21, 53);;font-size:100% ;box-shadow: 10px 10px 5px #888888;font-family:Courier New;">
</form>
    <br>
If Not A Member Sign Up <a href="register.php">SignUp</a>;
</body>
</div>
</html>