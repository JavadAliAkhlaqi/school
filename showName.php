<?php
include_once("db.php");

$result=mysql_query("select * from grade");
while($row=mysql_fetch_assoc($result)){
	echo "<option value='".$row["idGrade"]."'>".$row["gradeName"]."</option>";

}

?>
