<?php
$host="Localhost";
$username="root";
$password="";
$dl=$_GET['nn'];
$con=Mysql_connect("localhost","root","");

//////////////////////////delete admin//////////////
mysql_select_db("tasks",$con) or die("can not select db". mysql_error());
if(isset($_GET['na'])){
$dl=$_GET['na'];
$sql="delete from admin where aid='$dl'";
$dt=mysql_query($sql);

if($dt){
include("adlist.php");
}
else
echo"Fail".Mysql_error();

}
/////////////////////////////////////////////
?>
