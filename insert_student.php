<?php
include_once("connection.php");
$name=$_GET["name"];
$fname=$_GET["fname"];
$brDate=$_GET["brDate"];
$inDate=$_GET["inDate"];
$file=$_GET["file"];
$ssn=$_GET["ssn"];
$grade=$_GET["grade"];
if(mysql_query("insert into student values('','$name','$fname','$brDate','$file','$ssn','$grade','$inDate')")){
echo "inserted";

}else{

echo "not inserted";	

}
?>
