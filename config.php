<?php
  $host='localhost';
  //Change the user,password and database variables as desired
  $user='root';
  $pass='';
  $dbname='xperience';
  $link=mysql_connect($host,$user,$pass) or die(mysql_error());
  $db=mysql_select_db($dbname) or die(mysql_error());
?>