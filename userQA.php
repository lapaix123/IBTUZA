<!DO

<html>
<head>
<title>ONLINE MEDECINE SYSTEM</title>
<link rel="stylesheet" href="script/style.css" type="text/css">
<style type="text/css">
a:link
{
color:#FF0000;
text-decoration:none;
font-size:18px;
}
a:hover
{
color:#000000;
text-decoration:none;
font-size:18px;
}
</style>
</head>
<body>

<div id="head">

</div>
<div id="link">


<table border="0" bgcolor="#0099FF" style="width:1200px; height:40px; border:solid #FFFFFF;">
<tr><th><a href="newad.php">NEW ADMIN</a></th><th>
<a href="newdoc.php">NEW DOCTER</a></th><th><a href="conte.php">CONTE</a></th><th><a href="index.php">SGIGN OUT</a></th><th><a href="list.php">LISTE</a></th></tr></table>




</div>

<div id="bod" style="overflow:auto;">
<center><br>
<?php
echo"welcome Today   ".date('y-m-d')."<br>";
/////echo date('m:i:ss');
?>
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
//$st=$_POST["mm"];
$res=mysql_query("select * from sms ORDER BY id DESC");
?>




<h2><b>THE LIST OF SMS FROM PATIENTS</b></h2>
<br> 
<form action="page.php" method="post">

<table border="0">
<tr bgcolor="#CCCC66"><th>CODE</th><th>FNAME</th><th>LNAME</th><th>SMS</th></tr>

<?php
 while($row=mysql_fetch_array($res)){
 ?>
<tr><td bgcolor="#996633"><?php echo $row['id'];?></td>
<td bgcolor="#CC9999"><?php echo $row['fname'];?></td>
<td bgcolor="#CC6633"><?php echo $row['lname'];?></td>
<td style="height:50PX; width:500PX; background-color:#FFFFFF;"><?php echo $row['sms'];?></td>
<td><a href="smstopac.php?no=<?php echo $row['id'];?>">Confirm</a></td>
</tr>
<?php
}
?>
</table>
</form>
</center>
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