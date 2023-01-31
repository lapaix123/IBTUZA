
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
<tr><th><a href="home.php">HOME</a></th>
<th>
<a href="payment.php">SEND MESSEGE TO DOCTER </a></th>
<th><a href="rep.php">FEDEBACK</a></th>
<th><a href="index.php">SGIGN OUT</a></th></tr></table>
</div>
<div id="bod" style="background-image:url(task/teachers-meeting.gif)">



<font face="Times New Roman, Times, serif" size="+3" color="#3333FF" ><center>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>enter all of how yo infected</u>
</center></font>

<center><p style="margin-left:280px;"><br>
<font color="#0000FF" size="4">NB:your fedback is came in few time plz weigt. </font></p>
<center>
<form action="page.php" method="post">
<table border="0" style="border:1px solid;width:400px; background-image:url(task/646686838-1024x1024.jpg); height:100px; border-radius:4px; border-color:blue; margin-left:280px; "><font color="#0000FF" size="4">
<tr>
<th><font color="#0000FF" size="4"> </font> CODE</th> </tr>
<tr>
<td align="center"><input type="number" praceholder="your code" placeholder="Enter Code" name="code" style="text-align:center; border:solid 0px; background-color:#FFFFFF; border-radius:5px;" ></td>
</tr>
<tr>
<th><font size="4">SMS TO DOCTOR</font> </th> </tr>
<tr>
<td align="center"><textarea name="sms" placeholder="Enter Your information of your ferring" style="width:500px; height:300px; text-align:center; background-color:#FFFFFF; border:solid 0px; border-radius:5px;" ></textarea></td>
</tr>
<tr>
<td>
<font color="#FFFFFF" size="4">
<?php 
if(isset($_SESSION['error']))
{
echo $_SESSION['error'];
}
?></font> </td>
 </tr><tr>
 <td align="center"> <input type="submit" name="ds" value="SEND TO DOCTOR"> </td>
</tr>
</table>
</center>


</form>

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
