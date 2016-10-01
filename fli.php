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
   -webkit-margin-end: 0px;
   width:1427px;}
        
h2{
   background-color:black;
   color: white;
   -webkit-margin-before:0px;
   -webkit-margin-before: 0em;
   -webkit-margin-after: 0em;
   -webkit-margin-start: 0px;
   -webkit-margin-end: 0px;
   text-align: center;
   width:1427px}
    
.header{
    background-color:rgb(209, 227, 239);
    color: rgb(76, 131, 171);
    -webkit-margin-before: 0em;
    -webkit-margin-after: 0em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    width:1427px;}
    
.nav{
    line-height:30px;
    height:100px;
    width:1417px;
    float:left;
    padding:5px;
    margin:0px;
    color:white;}

body{
    background-image:url('cities.jpg');
    color:white;}
    
.section {
    text-align: center
    padding:0px;
    margin:0px;}

table,tr,td{
    border:0px solid black;
    white-space: normal;
    line-height: normal;
    font-size: x-large;
    font-variant: normal;
    font-style: normal;
    color: white;
    text-align: center;}

</style>
</head>

<a href="newflight.php">
<h1 style="font:700% Berlin Sans FB Demi"><img src="logo.png" alt="logo" width="145px"></a>SAYANE  AIRWAYS</h1>
<body><?php
$from=$_GET['Departure'];
$to=$_GET['Arival'];
?>
<?php
$dbflight=mysql_connect('localhost','root','');
mysql_select_db("flight");
if(!$dbflight)
{
    die('cannot connect'.mysql_error());
}

$result=mysql_query("SELECT * FROM `details` WHERE `From` LIKE '$from' AND `To` LIKE '$to';");
echo  "<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEARCH RESULTS</h2>";
echo "<div class='nav'>";
   echo  "<table style='width:100%'>";
   echo "<td>";
   echo "FLIGHT NO.";
   echo "</td>";
   echo "<td>";
   echo "DEPARTURE TIME";
   echo "</td>";
   echo "<td>";
   echo "ARRIVAL TIME";
   echo "</td>";
   echo "<td>";
   echo "DEPARTURE";
   echo "</td>"; 
   echo "<td>";
   echo "ARRIVAL";
   echo "</td>"; 
   echo "<td>";
   echo "PRICE";
   echo "</td>"; 
   echo "<td>&nbsp;</td>";
   echo "</tr>";
while( $row=mysql_fetch_array($result) )
{
  echo "<tr>";
   echo "<td>";
      echo "".$row["FlightNo"];
    echo "</td>";
    echo "<td>";
       echo "".$row["departure time"];
    echo "</td>";
    echo "<td>";
       echo "".$row["arrival time"];
    echo "</td>";
    echo "<td>";
      echo "".$row["From"];
    echo "</td>"; 
    echo "<td>";
      echo "".$row["To"];
    echo "</td>"; 
    echo "<td>";
      echo "".$row["Price"];
    echo "</td>"; 
    echo "<td>";
    echo "<a href='flogin1.php'>BOOK</a>";
    echo "</td>";
  echo "</tr>";
}
echo "</table>";
echo "</div>";
mysql_close($dbflight);
?>
</body>
</html>