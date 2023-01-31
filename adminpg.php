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
<a href="newdoc.php">NEW DOCTER</a></th><th><a href="conte.php">ACCOUNT</a></th><th><a href="list.php">LISTE</a></th><th><a href="index.php">SGIGN OUT</a></th></tr></table>

</div>
<div id="bod" style="background-image:url(task/internet-1028794_960_720.jpg)>
<font color="#FF0000" size="4"><i>
<center>
<?php 
echo"welcome".$_SESSION['user'];
?></i>
</font></center>
<font color="#0000FF" face="Georgia, Times New Roman, Times, serif">
<hr>
<center>
<a href="newad.php"> <img src="task/newad.jpg" width="300" height="150" style="border-radius:15px"> </a><a href="newdoc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="task/new doc.jpg" width="300" height="150" style="border-radius:15px"></a><a href="newad.php"><br>
NEW ADMIN</a>
<a href="newdoc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
NEW DOCTER</a><BR>
<a href="conte.php"><img src="task/jjjjjjjjjjjjjj.jpg" width="300" height="150" style="border-radius:15px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="userQA.php"><img src="task/images (4).png" width="300" height="150" style="border-radius:15px"></a><a href="conte.php"><br>
ACCOUNT CONTROL</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="userQA.php">VIEW PATINTS MESSAGE</a><BR>
<a href="list.php"><img src="task/images (7).jpg" width="300" height="150" style="border-radius:15px"><br>LISTE</a><BR>
</font>
</i>
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