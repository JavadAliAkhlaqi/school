<?php
include_once("connection.php");
$id=$_GET["id"];
$query="delete from student where idstudent=$id";
if(mysql_query($query)){
header("Location:http://localhost/w3_project/first_layer/index.php?title=student");
}else{
echo $query;

}

?>
