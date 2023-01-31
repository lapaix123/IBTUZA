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
.style1 {color: #000000}
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
<a href="signup.php">REGSTRATION</a></th>
<th><a href="signin.php">SIGN IN</a></th>
<th><a href="ucode.php">I HAVE CODE</a></th>

</tr></table>
</div>
<div id="bod" style="background-image:url(task/kkkk.jpg)">
<center>
<form action="page.php" method="post">
<br><br>
</center>
  <font face="Mistral" size="+3" color="#3333FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PATIENTS REGSTRATION FORM </font><center>
  <table border="0" style="border:1px solid; border-radius:4px; margin-right:400px; border-color:blue; width:400px; height:100px; "><font color="#0000FF" size="4">
<tr>
<th><span class="style1"><font size="4" > First Name</font> &nbsp; 
  <input type="text" name="fname" placeholder="Enter First name" style="width:230px; text-align:center;  border-radius:5px; border:solid 0px;" > 
  </span></th>
</tr>
<tr>
<th><span class="style1"><font size="4"> Last Name</font> &nbsp;&nbsp;
    <input type="text" name="lname" placeholder="Enter Last name" style="width:230px; text-align:center;  border-radius:5px; border:solid 0px;" > 
    </span></th>
</tr>
<tr>
<th><span class="style1"><font size="4"> Gendar&nbsp;&nbsp;&nbsp; 
      <input type="radio" name="gnd" value="F">
      Fimale &nbsp; 
      <input type="radio" name="gnd" value="M">
      Male</font> </span></th> 
<tr>
<th><span class="style1"><font size="4"> Email</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
    <input type="email" name="eml" placeholder="Enter ex: john@jmail.com" style="width:230px; text-align:center;  border-radius:5px; border:solid 0px;" > 
    </span></th>
</tr>
<tr>
<th><span class="style1"><font size="4"> Phone number</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="phon" placeholder="Enter Phone No:" style="width:230px; text-align:center;  border-radius:5px; border:solid 0px;" > 
    </span></th>
</tr>

<tr>
<th><span class="style1"><font size="4"> ID No:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="idn" placeholder="Enter Your ID No:" style="width:230px; text-align:center;  border-radius:5px; border:solid 0px;" > 
    </span></th>
</tr>


<tr>
<th><span class="style1"><font size="4"> Province</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
   

<select name="prov" placeholder="Select Your Province" style="width:100px; text-align:center;  border-radius:5px; border:solid 0px;">
<center>
<option value="E">East</option>
<option value="S">South</option>
<option value="N">North</option>
<option value="W">West</option>
<option value="Kgl">Kigali</option></center></select>
 </span></th>
</tr>
<tr>
<th><span class="style1"><font size="4"> Dstrict</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="dst" placeholder="Enter Your distrct" style="width:230px; text-align:center;  border-radius:5px; border:solid 0px;" > 
    </span></th>
</tr>
<tr>
<th><span class="style1"><font size="4"> Sector</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="text" name="sct" placeholder="Enter Your secter" style="width:230px; text-align:center;  border-radius:5px; border:solid 0px;" > 
    </span></th>
</tr>
<tr>
<th><span class="style1"><font size="4"> Cell</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="cell" placeholder="Enter Your Cell" style="width:230px; text-align:center;  border-radius:5px; border:solid 0px;" > 
    </span></th>
</tr>
<tr>
<th><span class="style1"><font size="4"> Village</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="text" name="vlg" placeholder="Ente Your Vilage" style="width:230px; text-align:center;  border-radius:5px; border:solid 0px;" > 
	
    </span></th>
</tr>

<tr>
<td> 
<font size="4" color="#FF0000"> 
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

if(isset($_SESSION['oya']))
{
echo $_SESSION['oya'];
}

?>
  </font></td>
 </tr><tr>
 <td align="center"> <input name="sup" type="submit" value="Regster"> </td>
</tr> 
</table></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<A href="index.php">back</A>

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