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
</style>
</head>
<body>

<div id="head">
</div>
<div id="link">
<table border="0" bgcolor="#0099FF" style="width:1200px; height:40px; border:solid #FFFFFF;">
<tr><th><a href="newad.php">NEW ADMIN</a></th><th>
<a href="newdoc.php">NEW DOCTER</a></th><th><a href="conte.php">ACCOUNT</a></th><th><a href="list.php">LISTE</a></th><th><a href="task/index.php">SGIGN OUT</a></th></tr></table>
</div>
<div id="bod" style="background-image:url(task/docp.PNG); overflow:auto;">

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
$ed=$_GET['nn'];
$res=mysql_query("select * from doctor WHERE did='$ed'")
?>




<h2><b>LIST OF DOCTER ON THE 
    SYSTEM</b></h2>
<br>
<form action="page.php" method="post">

<table border="0">
<tr bgcolor="#CCCC66"><th bgcolor="#FFFFFF"></th><th>FNAME</th><th>LNAME</th><th>EMAIL</th><th>GENDER</th><th>level</th><th>USER NAME</th><th>FILE</th><th>PHOTO</th></tr>

<?php
 while($row=mysql_fetch_array($res)){
?>


<tr><td><input type="hidden" name="a" value="<?php echo $row['did'];?>"></td>
<td><input type="text" name="b" value="<?php echo $row['fname'];?>"></td>
<td><input type="text" name="c" value="<?php echo $row['lname'];?>"></td>
<td><input type="text" name="d" value="<?php echo $row['email'];?>"></td>
<td><input type="text" name="e" value="<?php echo $row['gendar'];?>"></td>
<td><input type="text" name="f" value="<?php echo $row['level'];?>"></td>
<td><input type="text" name="g" value="<?php echo $row['username'];?>"></td>
<td><input type="file" name="fl" value="<?php echo $row['level'];?>"></td>
<td><input type="file" name="pt" value="<?php echo $row['username'];?>"></td>
<td><input type="submit" name="edt" value="SAVE"></td>
</tr>
<?php
}
?>
</table>
</form>
<center><a href="list.php">BACK</a><BR></center>
</center></div>


<div id="right">
</div>

<div id="f">
<center>
<font color="#FFFFFF" size="6" face="mistral"><i>&copy;copyright by Amaryllis apapen 2018</i></font>

</center>
</div>
</body>
</html>