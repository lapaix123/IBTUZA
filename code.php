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
<th><a href="home.php">HOME</a></th></tr></table>
</div>
<div id="bod">
<form action="page.php" method="post">
<font face="Times New Roman, Times, serif" size="+3" color="#3333FF" ></font><center>
  <p><font color="#3333FF" size="+3" face="Times New Roman, Times, serif">your code tha use in all time </font></p>
  <p><font color="#3333FF" size="+3" face="Times New Roman, Times, serif">you want to use this systeme is:</font></p>
  <p><font color="#3333FF" size="+3" face="Times New Roman, Times, serif"> &nbsp;<font color="#FF0000" size="+3"><?php echo"thecode is".$_SESSION['fcode'];?></font>&nbsp;prease save it on your</font></p>
  <p><font color="#3333FF" size="+3" face="Times New Roman, Times, serif"> email in older to protect you</font></p>
  <p><font color="#3333FF" size="+3" face="Times New Roman, Times, serif">thenks.</font> </p>
  <p><a href="home.php"><font color="blue" size="+3">Continue</font></a></p>
  <p>&nbsp;</p>
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
