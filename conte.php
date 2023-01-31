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
<tr><th><a href="adminpg.php">AD HOME</a></th><th><a href="newad.php">NEW ADMIN</a></th><th>
<a href="newdoc.php">NEW DOCTER</a></th><th><a href="conte.php">ACCOUNT</a></th><th><a href="list.php">LISTE</a></th><th><a href="index.php">SGIGN OUT</a></th></tr></table>

</div>
<div id="bod" style="background-image:url(task/internet-1028794_960_720.jpg); overflow:auto;">
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
$res=mysql_query("select id,camp,no,amount,date from conte");

$res2=mysql_query("select sum(amount) as tot from conte");
$dd=mysql_fetch_array($res2);
?>




<h2><strong>ACCOUNT MANGMENT FORM </strong></h2>
<br>


<table border="0">
<tr bgcolor="#CCCC66"><th>ID</th><th>CAMPANY</th><th>ID No:</th><th>AMOUNT</th><th>DATE</th></tr>

<?php
 while($row=mysql_fetch_array($res)){
?>


<tr><td><?php echo $row['id'];?></td>
<td><?php echo $row['camp'];?></td>
<td><?php echo $row['no'];?></td>
<td><?php echo $row['amount'];?></td>
<td><?php echo $row['date'];?></td>


</tr>
<?php
}
?>
<tr><td colspan="5" align="center"><FONT color="red" size="+2">Total: </FONT>  <?php echo $dd['tot'];?></td></tr>
</table>
<center><a href="list.php">BACK</a><BR></center>
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