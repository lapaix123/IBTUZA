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
<tr><th>
<a href="index.php">HOME</a></th>
<th>
<a href="signup.php">REGISTER</a></th>
<th><a href="signin.php">SIGN IN</a></th>
<th><a href="ucode.php">I HAVE CODE</a></th>
</tr></table>
</div>
<div id="bod" style="background-image:url(task/internet-1028794_960_720.jpg)">
<center>
<form action="page.php" method="post">
<br><br><br><br><br><br>
<center>
  <font face="Mistral" size="+3" color="#3333FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGNIN FOR START </font>
  <table border="0" style="border:1px solid; border-radius:60px 60px 60px 60px; border-color:blue; margin-left:170px;width:400px; height:100px;"><font color="#0000FF" size="4">
<tr>
<th><font color="#0000FF" size="4"> User Name</font> </th> </tr>
<tr>
<td align="center"> <input type="text" name="user" placeholder="Enter User Name" style="width:230px; text-align:center; background-color:#FFFFFF; border-radius:5px; border:solid 0px;" > </td></tr><tr><th><font color="#0000FF" size="4"> Password</font> </th>
</tr><tr> <td align="center"> <input type="password" name="pwd" placeholder="Enter Password" style="width:230px; text-align:center; background-olor:#FFFFFFc; border:solid 0px; border-radius:5px;"> </td>
</tr>
<tr>
<td> 
<font color="#FF0000">
<?php
if(isset($_SESSION['error']))
{
echo $_SESSION['error'];
}
?></font>
 </td>
 </tr><tr>
 <td align="center"> <input type="submit" name="admin" value="Admin" style="border:1px solid; border-radius:60px 60px 60px 60px; background-color:#000099"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="docter" value="Docter" style="border:1px solid; border-radius:60px 60px 60px 60px; background-color:#990033"></td>
</tr>
</table></center>
<A href="index.php">back</A>

</form>
</center>
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