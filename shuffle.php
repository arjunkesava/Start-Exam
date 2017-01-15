<?php
$host="localhost";          // Host name  
$username="root";           // Mysql username  
$password="tiger";          // Mysql password  
$db_name="exam";            // Database name
$tbl_name="ansheet";        //table name

mysql_connect("$host", "$username", "$password")or die("cannot connect");  
mysql_select_db("$db_name")or die("cannot select DB");

$ua1=$_POST['one']; 
$ua2=$_POST['two'];
$ua3=$_POST['three']; 
$ua4=$_POST['four'];
$ua5=$_POST['five'];
$userans=array("$ua1","$ua2","$ua3","$ua4","$ua5");
print_r($userans);
$x=1;
while($x<=5)
{
mysql_query("INSERT into $tbl_name(userans) values ($userans[$x]);") or die(mysql_error());
$x++;
}
$data=mysql_query("SELECT * from ansheet;")or die(mysql_query());
while($info=mysql_fetch_array($data))
{
    print $info['userans'];
    print "<br/>";
}

  $arrayw=array("arjun","robo","kesava");
  print_r($arrayw);
  echo"<br/>";
  shuffle($arrayw);
  print_r($arrayw);
  
  echo date("Y-m-d");
?>
