<?php
$link=mysql_connect('localhost','root','');
if(!$link)
 die('could not perform'.mysql_error());
if(!mysql_select_db('play'))
die(mysql_error);
?>