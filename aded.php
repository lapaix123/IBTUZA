<!DO

<html>
<head>

<title>ONLINE MEDECINE SYSTEM</title>
<link rel="stylesheet" href="task/script/style.css" type="text/css">
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
$dd=$_GET['n'];
$st=$_POST["mm"];
$res=mysql_query("select * from admin WHERE aid='$dd'")
?>




<h2><b>LIST OF DOCTER ON THE 
    SYSTEM</b></h2>
<br>

<form action="page.php" method="post">
<table border="0">
<tr bgcolor="#CCCC66"><th bgcolor="#FFFFFF"></th><th>FNAME</th><th>LNAME</th><th>USER NAME</th></tr>

<?php
 while($row=mysql_fetch_array($res)){
?>


<tr><td><input type="hidden" name="cd" value="<?php echo $row['aid'];?>"></td>
<td><input type="text" name="aa" value="<?php echo $row['fname'];?>"></td>
<td><input type="text" name="bb" value="<?php echo $row['lname'];?>"></td>

<td><input type="text" name="cc" value="<?php echo $row['username'];?>"></td>


<td><input type="submit" name="dede" value="SAVE"></td>
</tr>
<?php
}
?>
</table>
</form>
<center><a href="list.php">BACK</a><BR></center>
<div id="right">

</div>




</body>
</html>