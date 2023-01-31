

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
<div id="bod" style="background-image:url(task/wwwwww.PNG)">



<font face="Times New Roman, Times, serif" size="+3" color="#3333FF" ><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>fllow instlaction of how to go in</u></center></font>

<center><p style="margin-left:280px;"><br>
<font color="#0000FF">NB:You have to write code that you gete on the first time you came. </font></p>
<center>
<form action="page.php" method="post">
<table border="0" style="width:400px; height:100px; border-radius:4px; border-color:blue; margin-left:280px; "><font color="#0000FF" size="4">
<tr>
<th><font color="#0000FF" size="4"> YOUR CODE</font> </th> </tr>
<tr>
<td align="center"><input type="text" placeholder="Code Here" name="code" style="width:230px; text-align:center; border:solid 0px; border-radius:5px;" ></td>
</tr>
<tr>
<td>
<font color="#FF0000" size="4"><b>
<?php 
if(isset($_SESSION['error']))
{
echo $_SESSION['error'];
}
if(isset($_SESSION['ncode']))
{
echo $_SESSION['ncode'];
}
?></b></font> </td>
 </tr><tr>
 <td align="center"> <input type="submit" name="fedback" value="SEND"> </td>
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
