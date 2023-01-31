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
<div id="bod" style="background-image:url(task/pay.PNG)">
<BR><BR><BR>
<form action="page.php" method="post">

<font face="Times New Roman, Times, serif" size="+3" color="#3333FF" ></font><center>
  <font color="#3333FF" size="+3" face="Times New Roman, Times, serif"><u>follow instructions of how to pay</u></font>
</center>

<p style="margin-left:280px;"><br>
<font color="#0000FF">NB:The ammount you have to charge you <u>500Rfr</u> from your phone. </font></p>
<center><table border="0" style="border:1px solid;width:300px; height:100px; border-radius:4px; margin-left:150px;   border-color:blue;  "><font color="#0000FF" size="4">
<tr>
<th><center>
  <font color="#0000FF" size="4"> CODE</font> </center></th> </tr>
<tr>

<td align="center"> <input type="number" placeholder="Enter Code" name="id" style="width:230px; text-align:center; border:solid 0px; border-radius:5px;" ></td>
</tr>
<tr>
<th><center>
  <font color="#0000FF" size="4"> id card</font> </center></th> </tr>
  <td align="center"> <input type="id card" placeholder="Enter your id card" name="idc" style="width:230px; text-align:center; border:solid 0px; border-radius:5px;" ></td>
<tr>
<th><font color="#0000FF" size="4"> CAMPANY</font> </th> </tr>
<tr>
<td align="center"><select name="camp" style="width:90px; text-align:center; border:solid 0px; border-radius:5px;" >
<option value="MTN">MTN mobile money</option>
<option value="AIRTEL">AiRtel money</option>
<option value="TIGO">Tigo cash</option>
<option value="bk">BK</option>
<option value="bpr">BPR</option>
</select>
</td>
</tr>
<tr>
<th><font color="#0000FF" size="4"> ACCOUNT NUMBER</font> </th> 
</tr>
<tr>
<td align="center"><input type="number" placeholder="Enter Your Phone" name="phon" style="width:230px; text-align:center; border:solid 0px; border-radius:5px;" ></td>
</tr>


<tr>
<th><font color="#0000FF" size="4"> AMOUNT</font> </th> </tr>
<tr>
<td align="center"><input type="number" placeholder="YOUR MANY" name="frw" style="width:230px; text-align:center; border:solid 0px; border-radius:5px;" ></td>
</tr>

<tr>
<td><font color="#FF0000" size="4"> 
<?php
if(isset($_SESSION['error']))
{
echo $_SESSION['error'];
}
if(isset($_SESSION['success']))
{
echo $_SESSION['success'];
}
if(isset($_SESSION['wp']))
{
echo $_SESSION['wp'];
}
if(isset($_SESSION['ncode']))
{
echo $_SESSION['ncode'];
}
if(isset($_SESSION['nfrw']))
{
echo $_SESSION['nfrw'];
}
?></font> </td>
 </tr><tr>
 <td align="center"> <input type="submit" name="pay" value="SEND">
 <th><a href="fed.php">view feedback</a></th> </td>
</tr>
</table>
</center>


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
