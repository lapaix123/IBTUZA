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
<div id="bod" style="background-image:url(task/ndo.JPG)">

<form action="page.php" method="post">
<br><br>

<font face="Mistral" size="+3" color="#3333FF">Regster new docter </font>  <table border="0" style="border:1px solid; border-radius:4px; border-color:blue; margin-left:20px; margin-top:30px; width:400px; height:100px; "><font color="#0000FF" size="4">
<tr>
<th><font size="4"> First Name</font> &nbsp; <input type="text" name="fname" placeholder="Enter First Name" style="width:230px; border:solid 0px; text-align:center;  border-radius:5px;" > </th></tr>
<tr>
<th><font size="4"> Last Name</font>
 &nbsp;&nbsp;<input type="text" name="lname" placeholder="Enter Last Name" style="width:230px; text-align:center;  border:solid 0px; border-radius:5px;" > </th></tr>
<tr>
<th><font size="4"> level</font>
 &nbsp;&nbsp;<input type="text" name="lv" placeholder="Enter Your Level" style="width:230px; text-align:center; border:solid 0px; border-radius:5px;" > </th></tr>
<tr>
<th><font size="4"> Your Certificate</font>
 &nbsp;&nbsp;
 <input name="file" type="file" style="width:190px; text-align:center;">
</tr>
<tr>
<th><font size="4"> Photo</font>
 &nbsp;&nbsp;
<input name="photo" type="file" style="width:190px; text-align:center;">
</tr>
 <tr>
<th><font size="4"> Gender</font>
 &nbsp;&nbsp;<input type="radio" name="gnd" value="F"  >Female &nbsp;<input type="radio" name="gnd" value="M"  >Male </th></tr>
<tr>
<th><font size="4"> User Name</font>
 &nbsp;&nbsp;&nbsp;<input type="text" name="user" placeholder="Enter User Name" style="width:230px; text-align:center; border:solid 0px; border-radius:5px;" > </th></tr>
 <tr><th><font size="4"> Password</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="pwd" placeholder="Type New Password" style="width:230px; border:solid 0px; text-align:center; border-radius:5px;"></th></tr>
<tr><th><font size="4"> re-Password</font> <input type="password" name="rpwd" placeholder="Retype New Password" style="width:230px; text-align:center; border:solid 0px; border-radius:5px;"> </th></tr>
<tr>
<th><font size="4"> Email</font>
<input type="text" name="eml" placeholder="Enter Your email" style="width:230px; text-align:center; border:solid 0px; border-radius:5px;" > </th></tr>
<tr>
<td>
<font color="#FF0000" size="4"> 
<?php
if(isset($_SESSION['error']))
{
echo $_SESSION['error'];
}
if(isset($_SESSION['error2']))
{
echo $_SESSION['error2'];
}
if(isset($_SESSION['success']))
{
echo $_SESSION['success'];
}
if(isset($_SESSION['wp']))
{
echo $_SESSION['wp'];
}
if(isset($_SESSION['oya']))
{
echo $_SESSION['oya'];
}
?></font> </td>
 </tr><tr>
 <td align="center"> <input type="submit" name="newdoc" value="Sign up"> </td>
</tr> 
</table>

                                      <a href="adminpg.php">BACK</a><BR>



</form>
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