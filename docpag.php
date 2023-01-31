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
<tr><th><a href="userQ.php">MESSEGE FROM PATIENTS</a></th><th><a href="index.php">SGIGN OUT</a></th></tr></table>
</div>
<div id="bod" style="background-image:url(task/docp.PNG)">
<center><font color="#FF0000" size="5">
<?php 
echo"welcome Dr:  ".$_SESSION['user'];
?>
</font></center>
<hr>

<font color="#0000CC" size="5" face="Courier New">WERCOME DOCTER<br>
YOUHAVE TO READ MESSAGE<BR> FROM PATIENTS AND SEND <BR>ANSWER LIKE MEDECINE<BR> OR TRANCIFER FOR MAKING<BR> GOOD SERVICES PLEAS <br>THENKS TODO ALL!!</font>


</div>
<div id="right">
</div>

<div id="f">
<center>
<font color="#FFFFFF" size="6" face="mistral"><i>&copy;copyright by Amaryllis apapen 2018</i></font>

</center>
</div>
</body>
</html>