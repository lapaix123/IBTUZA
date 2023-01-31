<html>
<body>

<?php

$conn=mysql_connect("localhost","root","");
if(!$conn)
{Die("Fail to connect".mysql_error());}
$seldb=mysql_select_db("tasks");
if(!$seldb)
{Die("Fail to select db".mysql_error());}



/* login    ADMIN*/


 if(isset($_POST['admin']))
 {
 if($_POST['user']==""||$_POST['pwd']=="")
	{
$_SESSION['error']="Plz, Fill in all fields!!!";
include("signin.php");
}
else
	{

 $log=mysql_query("SELECT * FROM  `admin` WHERE username ='" . $_POST["user"]. "' AND password = '" . md5($_POST["pwd"])."'");
 
$count=mysql_num_rows($log);
if($count==1)
{
	$rw=mysql_fetch_array($log);
 $_SESSION['user']=$rw['lname']. "  ".$rw['fname'];

 //header("location:success.php");
include("adminpg.php") ;
}
else{
$_SESSION['error']="Incorrect UserName or Password!!";
include("signin.php");
}
	}
 
 
 }
///////////////////admin creation////////////////////////////

if(isset($_POST['newad']))
{
if($_POST['fname']==""||$_POST['lname']==""|| $_POST['user']==""||$_POST['pwd']==""|| $_POST['rpwd']==""||$_POST['eml']=="")
	{
$_SESSION['error']="Plz fill in fields!!";
include("newad.php");
}
elseif($_POST['pwd']!=$_POST['rpwd'])
	{
$_SESSION['error2']="Passwords Mismatch!!";
include("newad.php");

}
else
	{
 $q=mysql_query("select * from doctor where username='".$_POST['user']."' AND password='".md5($_POST['pwd'])."' AND email='".$_POST['eml']."'");
$n=mysql_num_rows($q);
if($n==0)
		{

$fn=$_POST['fname'];$ln=$_POST['lname'];
$uza=$_POST['user'];$pwd=md5($_POST['pwd']);
$rpwd=md5($_POST['rpwd']);$eml=$_POST['email'];
$k=mysql_query("insert into admin(fname,lname,username,password,repassword,email)values('$fn','$ln','$uza','$pwd','$rpwd','$eml')");
		
if($k)
			{
	$_SESSION['success']="Account created successfully!";
    include("newad.php");
}
else
{
	$er=mysql_error();
	$_SESSION['wp']="Fail to create account username and password not allowed!!";
	include("newad.php");
	}}

	else
			{
	$_SESSION['oya']="Try another account!!";
	}
}

}
///////////////////docter creation////////////////////////////

if(isset($_POST['newdoc']))
{
if($_POST['fname']==""||$_POST['lname']==""|| $_POST['user']==""||$_POST['pwd']==""|| $_POST['rpwd']==""||$_POST['eml']==""||$_POST['gnd']==""||$_POST['lv']==""||$_POST['file']==""|| $_POST['photo']=="")
	{
$_SESSION['error']="Plz fill in fields!!";
include("newdoc.php");
exit();
}
elseif($_POST['pwd']!=$_POST['rpwd'])
	{
$_SESSION['error2']="Passwords Mismatch!!";
include("newdoc.php");
exit();
}
else
	{
 $q=mysql_query("select * from admin where username='".$_POST['user']."' AND password='".md5($_POST['pwd'])."'");
$n=mysql_num_rows($q);
if($n==0)
		{

$fn=$_POST['fname'];$ln=$_POST['lname'];
$uza=$_POST['user'];$pwd=md5($_POST['pwd']);
$rpwd=md5($_POST['rpwd']);$eml=$_POST['eml'];
$gnd=$_POST['gnd'];$lv=$_POST['lv'];
$fl=$_POST['file'];$pt=$_POST['photo'];
$k=mysql_query("insert into doctor(fname,lname,password,repassword,username,gendar,level,email,file,photo)values('$fn','$ln','$pwd','$rpwd','$uza','$gnd','$lv','$eml','$fl','$pt')");
		
if($k)
			{
	$_SESSION['success']="Account created successfully!";
    include("newdoc.php");
	exit();
}
else
{
	$er=mysql_error();
	$_SESSION['wp']="Fail to Regster Docter!!".$er;
	include("newdoc.php");
	exit();
	}}

	else
			{
	$_SESSION['oya']="Try another account!!";
	include("newdoc.php");
	}
}

}
/* login    DOCTER*/


 if(isset($_POST['docter']))
 {
 if($_POST['user']==""||$_POST['pwd']=="")
	{
$_SESSION['error']="Plz, Fill in all fields!!!";
include("signin.php");
}
else
	{

 $log=mysql_query("SELECT * FROM  `doctor` WHERE userName ='" . $_POST["user"]. "' AND passWord = '" . md5($_POST["pwd"])."'");
 
$count=mysql_num_rows($log);
if($count==1)
{
	$rw=mysql_fetch_array($log);
 $_SESSION['user']=$rw['lname']. "  ".$rw['fname'];

 //header("location:success.php");
include("docpag.php") ;
}
else{
$_SESSION['error']="Incorrect UserName or Password!!";
include("signin.php");
}
	}
 
 
 }
 ///////////////////user sign up////////////////////////////

if(isset($_POST['sup']))
{
if($_POST['fname']==""||$_POST['lname']==""||$_POST['gnd']==""||$_POST['prov']==""||$_POST['dst']==""||$_POST['sct']==""||$_POST['cell']==""||$_POST['vlg']==""||$_POST['phon']==""||$_POST['idn']=="")
	{
$_SESSION['error']="Plz fill in fields!!";
include("signup.php");
exit();
}
else
	{

$fn=$_POST['fname']; $ln=$_POST['lname'];
$eml=$_POST['eml']; $id=$_POST['idn'];
$gnd=$_POST['gnd'];
$pro=$_POST['prov']; $dis=$_POST['dst'];
$cel=$_POST['cell']; $vlg=$_POST['vlg'];
$No=$_POST['phon']; $sect=$_POST['sct'];
$k=mysql_query("insert into users(fname,lname,email,gendar,province,district,secter,cell,vilage,phoneNo,IDNo)values('$fn','$ln','$eml','$gnd','$pro','$dis','$sect','$cel','$vlg','$No','$id')");
		
if($k){
$fcode=mysql_query("SELECT  uid FROM  `users` where fname='$fn' AND lname='$ln'");
$count=mysql_num_rows($fcode);
	$rw=mysql_fetch_array($fcode);
 $_SESSION['fcode']=$rw['uid'];
	$_SESSION['success']="Account created successfully!";
	$_SESSION['code']=$rw["uid"];
    include("code.php");
	exit();
}
else{
	$_SESSION['oya']="fail to create account!!".mysql_error();
include("signup.php");
	}
	}
}



//////////////////cheak code//////////////////////
if(isset($_POST['lgncd']))
{
if($_POST['code']==""){
$_SESSION['error']="Plz fill in fields!!";
include("ucode.php");
exit();
}else{
$cc=mysql_query("SELECT * FROM  `users` WHERE uid ='" . $_POST["code"]."'");
$co=mysql_num_rows($cc);
if($co==0){
$_SESSION['ncode']="Your code is not regterd!!!!!!! ";
include("ucode.php");
exit();
}
else{


 $log=mysql_query("SELECT * FROM  `users` WHERE uid='".$_POST['code']."'");
 
$count=mysql_num_rows($log);
if($count==1)
{
	$rw=mysql_fetch_array($log);
 $_SESSION['user']=$rw['lname']. "  ".$rw['fname'];


include("home.php");
}



	exit();
}
}
}
///////////////////////////payment////////////////////////
if(isset($_POST['pay']))
{
if($_POST['id']==""||$_POST['camp']==""||$_POST['phon']==""||$_POST['idc']==""){
$_SESSION['error']="Plz fill in fields!!!!!!!!!!!!";
include("payment.php");
exit();
}
if($_POST['id']){
$cc=mysql_query("SELECT * FROM  `users` WHERE uid ='" . $_POST["id"]."' and IDNo ='".$_POST['idc']."'");
$co=mysql_num_rows($cc);
if($co==0){
$_SESSION['ncode']="Your code & ID No is not regterd!!!!!!! ".mysql_error();
include("payment.php");
exit();
}
}
if(($_POST['frw']>500)||($_POST['frw']<500)){
$_SESSION['nfrw']="Amount can be 500frw only !!!!!!! ";
include("payment.php");
exit();
}

else{
$a=$_POST['id'];
$b=$_POST['camp'];
$c=$_POST['phon'];
$e=500;
$f=date('y-m-d');
$k=mysql_query("insert into conte(id,camp,no,amount,date)values('$a','$b','$c','$e','$f')");
if($k)
			{
	$_SESSION['success']="your mony are payed well!!!!!!!!";
    include("smstodoc.php");
	exit();
}

else
{
	$er=mysql_error();
	$_SESSION['wp']="Fail to pay pleas check oll inforrmation !!!!!!!".mysql_error();
	include("payment.php");
	exit();
	}
}






}
//////////////////////////////////////smsmsmsmsmsmsmsmsmsmsmms to docter///////////////////////////
if(isset($_POST['smstodoc'])){
if($_POST['sms']==""||$_POST['code']==""){
$_SESSION['error']="Plz fill in fields!!";
include("smstodoc.php");
exit();
}
else{
$cc=mysql_query("SELECT * FROM  `conte` WHERE id ='" . $_POST["code"]."'");
$co=mysql_num_rows($cc);
$rw=mysql_fetch_array($cc);
$code=$_POST['code'];
$fn=$rw['fname'];
$ln=$rw['lname'];
$sms=$_POST['sms'];
$xx='nnnnnn';
$inse=mysql_query("insert into sms(id,fname,lname,sms,pstatus)values('$code','$fn','$ln','$sms','$xx')");
if($inse){
	$_SESSION['success']="sms sent success!!!!!!!";
    include("home.php");
	exit();
}
else{
$_SESSION['wp']="fail tosend sms!!!!!!!".mysql_error();
    include("smstodoc.php");
	exit();
}

}
}

//send msesaje to patients
if(isset($_POST['ansa'])){


}
//////////////////seeeeee fed//////////////////////
if(isset($_POST['fedback']))
{
if($_POST['code']==""){
$_SESSION['error']="Plz fill in fields!!";
include("fed.php");
exit();
}else{
$cc=mysql_query("SELECT * FROM  `smsdoc` WHERE id ='" . $_POST["code"]."'");
$co=mysql_num_rows($cc);
if($co==0){
$_SESSION['ncode']="Message not came plz wait!!!! ";
include("fed.php");
exit();
}
else{
include("rep.php");
	exit();
}
}
}
//////////////////////////////////////smsmsmsmsmsmsmsmsmsmsmms to patients///////////////////////////
if(isset($_POST['fedi'])){
if($_POST['med']==""||$_POST['tra']==""||$_POST['code']==""){

$_SESSION['error']="Plz fill in fields!!!!";
include("smstopac.php");
exit();
}
else{
$cc=mysql_query("SELECT * FROM  `smsdoc` WHERE id ='" . $_POST["code"]."'");
$co=mysql_num_rows($cc);

$ccs=mysql_query("SELECT * FROM  `users` WHERE uid ='" . $_POST["code"]."'");
$cos=mysql_fetch_array($ccs);


if($co==0){
$med=$_POST['med'];
$tr=$_POST['tra'];
$id=$cos['uid'];
$inse=mysql_query("insert into smsdoc(id,med,tr)values('$id','$med','$tr')");
if($inse){
	$_SESSION['success']="sms sent success!!!!!!!";
    include("userQ.php");
	exit();
}
else{
$_SESSION['wp']="fail tosend sms!!!!!!!".mysql_error();
    include("smstopac.php");
	exit();
}

}else{
$_SESSION['wp']="the message was responded!!!!!!!".mysql_error();
    include("smstopac.php");
	exit();
}
}
}






//////////////////////////////////////smsmsmsmsmsmsmsmsmsmsmms to docter///////////////////////////
if(isset($_POST['ds'])){
if($_POST['sms']==""||$_POST['code']==""){
$_SESSION['error']="Plz fill in fields!!";
include("smstodoc.php");
exit();
}
else{
$cc=mysql_query("SELECT * FROM  `users` WHERE uid ='" . $_POST["code"]."'");
$co=mysql_num_rows($cc);
$rw=mysql_fetch_array($cc);
$code=$_POST['code'];
$fn=$rw['fname'];
$ln=$rw['lname'];
$sms=$_POST['sms'];
$inse=mysql_query("insert into sms(id,fname,lname,sms)values('$code','$fn','$ln','$sms')");
if($inse){
	$_SESSION['success']="sms sent success!!!!!!!";
    include("payment.php");
	exit();
}}}
///////////////////docter uuuuuuupppppppp////////////////////////////

if(isset($_POST['edt']))
{


$id=$_POST['a'];$fn=$_POST['b'];
$ln=$_POST['c'];$eml=$_POST['d'];
$gnd=$_POST['e'];$lv=$_POST['f'];
$uza=$_POST['g'];$fl=$_POST['fl'];$pt=$_POST['pt'];
$k=mysql_query("update doctor set fname='$fn',lname='$ln',email='$eml' ,username='$uza',gendar='$gnd',level='$lv',file='$fl',photo='$pt' where did='$id'");
		
if($k)
			{

    include("doclist.php");
	
}
else
{
	$er=mysql_error();
	$_SESSION['wp']="Fail to Regster Docter!!".$er;
	include("editdoc.php");

	}


}
///////////////////admin uuuuuuuuuuuuuupppppppppp////////////////////////////

if(isset($_POST['dede']))
{


$id=$_POST['cd'];$fn=$_POST['aa'];
$ln=$_POST['bb'];
$uza=$_POST['cc'];
$k=mysql_query("update admin set fname='$fn',lname='$ln',username='$uza' where aid='$id'");
		
if($k)
			{

    include("adlist.php");
	
}
else
{
	$er=mysql_error();
	$_SESSION['wp']="Fail to Regster Docter!!".$er;
	include("aded.php");

	}


}
///////////////////user uuuuuuuuuuuuuupppppppppp////////////////////////////

if(isset($_POST['sv']))
{



$fn=$_POST['q']; $ln=$_POST['w'];
$eml=$_POST['e']; $id=$_POST['l'];
$gnd=$_POST['r'];$uid=$_POST['g'];
$pro=$_POST['t']; $dis=$_POST['y'];
$cel=$_POST['i']; $vlg=$_POST['o'];
$No=$_POST['p']; $sect=$_POST['u'];
$k=mysql_query("update users set fname='$fn',lname='$ln',email='$eml',gendar='$gnd',province='$pro',district='$dis',secter='$vlg',cell='$cel',vilage='$vlg',phoneNo='$No',IDNo='$id' where uid='$uid'");
	if($k){
    include("userlist.php");
}
else
{
	$er=mysql_error();
	$_SESSION['wp']="Fail to Regster Docter!!".$er;
	include("ued.php");

	}


}


?>

</body>
</html>