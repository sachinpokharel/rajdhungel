<?php 
connection- mysql_connect("localhost",'root','');
mysql_select_db('laravel') or die(mysql_error());
$result=mysql_query("SELECT username FROM member");
while($row=mysql_fetch_assoc($result)){
	echo "<div id='link' onClick='addText(\".row[username]."\");'>" . row['username'] . "<div>";
}



 ?>