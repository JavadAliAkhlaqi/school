<?php
include_once("connection.php");
$id=$_GET["id"];
$name=$_GET["name"];
$fname=$_GET["fname"];
$ssn=$_GET["ssn"];
$grade=$_GET["grade"];
$birthDate=$_GET["birthDate"];
$img=$_GET["img"];
$startDate=$_GET["startDate"];
 if(mysql_query("update student set name='$name',fatherName='$fname',ssn='$ssn',id_gr=$grade,birthDate='$birthDate',image='$img',startDate='$startDate' where idStudent=$id")){
 echo "successfully updated";
 }else{
echo "sorry try again later";
 }
?>
