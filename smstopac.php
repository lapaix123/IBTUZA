
<!DO

<html>
<head>

<title>ONLINE MEDECINE SYSTEM</title>
<link rel="stylesheet" href="script/style.css" type="text/css">
<style type="text/css">
a:link
{
color:blue;
text-decoration:none;
font-size:18px;
}
a:hover
{
color:red;
text-decoration:none;
font-size:18px;
}
.style1 {
	font-size: medium;
	font-weight: bold;
	color: #0000FF;
	font-style: italic;
}
</style>
</head>
<body>

<div id="head">

</div>
<div id="link">
<table border="0" bgcolor="#0099FF" style="width:1200px; height:40px; border:solid #FFFFFF;">
<tr><th><a href="userQ.php">MESSEGE FROM PATIENTS</a></th><th>
<th><a href="index.php">SGIGN OUT</a></th>
</table>
</div>
<div id="bod" style="background-image:url(task/slider-3.jpg)">
<center>
<font color="#000000"><i>
<?php
echo"welcome Today   ".date('y-m-d')."<br>";
//echo date('m:i:ss');
?>
</i></font></center>
<hr style="height:2px; background-color:#0000FF;">
<br><?php

$conn=mysql_connect("localhost","root","");
if(!$conn){
Die("Fail to connect".mysql_error());
}
$seldb=mysql_select_db("tasks");
if(!$seldb){
Die("Fail to select db".mysql_error());
}
$st=$_POST["mm"];
$aa=$_GET['no'];
$coa=mysql_query("select * from sms where id='$aa'");
$ro=mysql_fetch_array($coa);
?>
<br><br><br>
<font face="Verdana, Arial, Helvetica, sans-serif",size="5" color="#3333FF" style="background-color:#FFFFFF"><center>Send feedback to patients</font>

<br><br>
<form action="page.php" method="post">
<table border="0" style="border:1px solid; background-color:#FFFFFF; width:400px; height:100px; border-radius:4px; border-color:blue; margin-left:50px; background-image:url(task/b.PNG);"><font color="#0000FF" size="4">
<tr><td width="200"></td><td><input type="hidden" name="code" value="<?php  echo $ro['id'];  ?>"></td> </tr>

<tr><td align="left">Medecine</td><td><textarea name="med" placeholder="Enter medecine for Patient" style="width:200px; height:40px; border-radius:5px;" ></textarea></td></tr>

<tr><td align="left">Transfer</td><td><textarea name="tra" placeholder="Enter Trancifer" style="width:200px; height:40px; border-radius:5px;" ></textarea></td></tr>

<tr><td align="left"> <font color="#FF0000" size="4">
<?php 
if(isset($_SESSION['error']))
{
echo $_SESSION['error'];
}
if(isset($_SESSION['success']))
{
echo $_SESSION['success'];
}
if(isset($_SESSION['wp']))
{
echo $_SESSION['wp'];
}
?></font> </td><td align="right"><input type="submit" name="fedi" value="SEND"></td>
</tr>
</table>
<a href="userQ.php">Back</a>
</center>
</form>

</div>
<div id="right">

</div>
</div>
<div id="f">
<center>
<font color="#FFFFFF" size="6" face="mistral"><i>&copy;copyright by Amaryllis apapen 2018</i></font>

</center>
</div>
</body>
</html>
