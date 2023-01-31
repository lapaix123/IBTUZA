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
<br>
<?php

$conn=mysql_connect("localhost","root","");
if(!$conn){
Die("Fail to connect".mysql_error());
}
$seldb=mysql_select_db("tasks");
if(!$seldb){
Die("Fail to select db".mysql_error());
}
$st=$_POST["mm"];
$res=mysql_query("select * from admin")
?>

<h2><b>LIST OF ADMIN ON THE 
    SYSTEM</b></h2>
<br>


<table border="0">
<tr bgcolor="#CCCC66"><th>ID</th><th>FNAME</th><th>LNAME</th><th>USER NAME</th></tr>

<?php
 while($row=mysql_fetch_array($res)){
?>


<tr><td><?php echo $row['aid'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['lname'];?></td>

<td><?php echo $row['username'];?></td>

<td><a href="add.php?na=<?php echo $row['aid']; ?>" onClick="return confirm('Are you sure want to delete RECORD?')"><input type="submit" name="dlt" value="delete"></a></td>
<td><a href="aded.php?n=<?php echo $row['aid'];?> "><input type="submit" name="edt" value="edit"></a></td>
</tr>
<?php
}
?>

</table></center></div>
<div id="right">
</div>

<div id="f">
<center>
<font color="#FFFFFF" size="6" face="mistral"><i>&copy;copyright by Amaryllis apapen 2018</i></font>

</center>
</div>
</body>
</html>