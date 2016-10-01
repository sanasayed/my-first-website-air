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
    background-color: rgb(195, 212, 239);
    color: rgb(23, 80, 136);
    -webkit-margin-before: 0px;
    -webkit-margin-before: 0em;
    -webkit-margin-after: 0em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    text-align: center;}
    
h3{
    font-size: 200%;
    text-align: left;
    font-family:fantasy;}
    
select {
    font-size:x-large;
    text-align: center;
    color: #000099;
    background-color: lightgrey;
    font-family: "comic sans ms";
    cursor: default;}
    
.header {
    background-color:rgb(195, 212, 239);
    color: rgb(76, 131, 171);
    -webkit-margin-before: 0em;
    -webkit-margin-after: 0em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;}
    
.nav {
    line-height:30px;
    background-color:#eeeeee;
    height:48px;
    width:1417px;
    float:left;
    padding:5px;
    margin:0px;}
    
.section {
    background-image: url('http://www.hdwallpapers-desktop.com/Aircraft-Wallpaper-Free/images/aircraft%20flight%20cloud%20sky.jpg');
	background-repeat: no-repeat;
	margin-right: 0px;
    padding: 1px;
    text-align:left;
    padding:0px;
    margin:0px;}
   
element.style {
     height: 1200px;}

body{
     margin:0px;}

nav ul li:hover > ul{
     display: block;}
    
nav ul {
    font-size:larger;
    background-color: rgb(195, 212, 239);
    border :1px ;
    font :bold 16px Sans-serif;
    padding:0px;
    border-radius: 5px;  
    list-style: none;
    position: relative;
    display:block;
    margin:0px;}

nav ul:after {
    content: ""; clear: both; display: block;}
    
nav ul li {
   float: left;
   position:relative;
   list-style-type:none;}
    
nav ul li:hover {
    background: #CCCCEB;}

nav ul li a {
    font-size:larger;
    display: block; 
    padding: 15px 30px;
    color: #000099; 
    text-decoration:none;
    border-right:1px;}
    
nav ul ul {
    background: white; 
    border-radius: 0px;
    padding:0px;
    position: absolute; 
    display:none;}
    
nav ul ul li {
    float:none;
    border:1px solid #03719c;
    box-shadow: 10px 10px 15px #888888;}
    
nav ul ul li a {
    font-family: "times new roman";
    padding: 2px;
    color: #000099;}
    
nav ul ul li a:hover {
    background: white;}

nav ul li a:hover{
    color:#6666b2;}

</style>

</head>


<div class="header">
<a href="newflight.php">
<h1 style="font:700% Berlin Sans FB Demi"><img src="logo.png" alt="logo" width="145px"></a>SAYANE  AIRWAYS</h1>
    <h2 style="font-size:300%">ONLINE FLIGHT RESERVATION</h2>
<marquee><h2 style="font-size:200% ;font-style:italic">Book Domestic Flights</h2></marquee>
</div>
<nav>
    <nav>
     <ul>
         <li><a href="newflight.php">&nbsp;&nbsp;&nbsp;&nbsp;HOME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        
                  <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ABOUT US&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
             <ul>
               <li><a href="#">We are good in business would like to give you excellent discounts</a></li> 
                 </ul>
        </li>
         
        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
         <ul>
             <li><a href="#">Email Address: admin@sayaneairways.com<br>
             Phone No.: 2345678901</a></li>
             </ul>
            </li>
         <li><a href="rules.php">&nbsp;&nbsp;&nbsp;&nbsp;RULES & REGULATIONS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
     </ul>
</nav>
    

<body>
<div text-align="left" class="section">
 <br><br><br><br><br><br><br><br>

<h3>Flying from&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flying to</h3>
    <br>
    <br>
<form action="fli.php" method="get" >
<select name="Departure" value="Departure" align="center">
<option value="Depart">--Depart--</option>
<option value="Bengaluru">Bengaluru</option>
<option value="Chennai">Chennai</option>
<option value="Kolkata">Kolkata</option>
<option value="Mumbai">Mumbai</option>
<option value="New Delhi">New Delhi</option>
</select>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &#x21cc;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<select name="Arival" value="Arival">
<option value="Arrive">--Arrive--</option>
<option value="Bengaluru">Bengaluru</option>
<option value="Chennai">Chennai</option>
<option value="Kolkata">Kolkata</option>
<option value="Mumbai">Mumbai</option>
<option value="New Delhi">New Delhi</option>
    </select>
<br><br><br><br>
<br><br><br><br>

<h4 style="font-size:200%;text-align:left;font-family:fantasy;">Date of Departure</h4>
    <br>
    <br>
<select><option value="Date">--Date--</option>
 <script>
  for(var i = 1; i < 32; i++){
	  document.write('<option value="'+i+'">'+i+'</option>');
  }
  </script>
</select>

       
&nbsp;&nbsp;<select>
<option value="Month">--Month--</option><option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option> </select>&nbsp;&nbsp;
<select><option value="Year">--Year--</option><option value="2014">2014</option><option value="2015">2015</option></select>&nbsp;&nbsp;
    <br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="sb" type="submit" style="background-color:rgb(185, 205, 242);color:rgb(163, 21, 53);;font-size:150% ;box-shadow: 10px 10px 5px #888888;font-family:Courier New;" value="Search for Flights">
    <br>
    <br>
    <br>
    <br>
</form>
</div>
</body>
</html>