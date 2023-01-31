
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
.style1 {
	font-size: medium;
	font-weight: bold;
	color: #0000FF;
	font-style: italic;
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
<div id="bod">
<center>
<font color="#000000"><i>
<?php
echo"welcome Today   ".date('y-m-d')."<br>";
//echo date('m:i:ss');
?>
</i></font></center>
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
$st=$_POST["code"];
$resi=mysql_query("select * from users where uid='$st' ");
$roww=mysql_fetch_array($resi);

$resii=mysql_query("select amount from conte where id='$st' ");
$rowu=mysql_fetch_array($resii);

$r=mysql_query("select lname,fname from doctor");
$ro=mysql_fetch_array($r);

$resiii=mysql_query("select * from smsdoc where id='$st' ");
$rowui=mysql_fetch_array($resiii);
?>

<font face="Times New Roman" size="6" color="#3333FF" ><center>feedback from doctor</center></font>


<center>
<table border="0" style="border:1px solid;width:500px; height:400px; border-radius:4px; border-color:blue;  "><td width="162" height="115"><font color="#0000FF" size="4"><img src="task/Asset-11.png" width="144" height="97"><BR>

</td><td class="style1"><center><h3>Online Medecine Support System Report<BR>Email:onlinemedc@gmail.com<br>Tel:0784545679                          </h3><BR>
  ________________________________________________________
   </center></td>
   
<tr><td  align="right"><em><font color="#0000FF">Patient Id: </font></em></td><td width="322"><center><?php echo $roww['uid'];?></center></td></tr>
  
<tr><td align="right"><em><font color="#0000FF">Names:</font></em></td><td><center><?php echo $roww['fname']." ".$roww['lname'];?></center></td></tr>

<tr><td align="right"> <font color="#0000FF" ><i>Medecine:</i></font></td><td><center><i><?php echo $rowui['med']; ?></i></center></td></tr>
  
<tr><td align="right"><em><font color="#0000FF">Transfer:</font></em></td><td><center><?php echo $rowui['tr'];?></center></td></tr>

<tr><td align="right"> <font color="#0000FF" ><i>Amount payed:</i></font></td><td><center><?php echo $rowu['amount'];?> Rwf</center></td></tr>

<tr><td align="right"> <font color="#0000FF" ><i>Dates:</i></font></td><td><center><i><?php echo date('y-m-d'); ?></i></center></td></tr>

<tr><td align="right"><font color="#0000FF" ><i>Ordered by: </i></font></td><td><center>Dr <?php echo $ro['lname']." ".$ro['fname'];?></center></td></tr>

<tr><td align="right"><font color="#0000FF" >Stamp &amp; Sign </i></font></td><td ><center><img src="task/download (3).jpg" width="132" height="56"></center></td></tr>

</table>
<a href="fed.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="pri" value="Print" style="background-color:#FFCC00;border-radius:4px; width:50;height:30;">
</center>

<?php
//}
?>
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
