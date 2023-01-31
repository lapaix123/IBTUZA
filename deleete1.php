
<?php
$host="Localhost";
$username="root";
$password="";
$dl=$_GET['nn'];
$con=Mysql_connect("localhost","root","");

//////////////////////////delete docter//////////////
mysql_select_db("tasks",$con) or die("can not select db". mysql_error());
if(isset($_GET['nn'])){
$dl=$_GET['nn'];
$sql="delete from doctor where did='$dl'";
$dt=mysql_query($sql);

if($dt){
include("doclist.php");
}
else
echo"Fail".Mysql_error();

}
/////////////////////////////////////////////
?>
