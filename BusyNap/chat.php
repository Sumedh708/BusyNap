<html>
<body><head><title>Chat</title></head>
<body>
<h1>Chat privately and secrurely</h1>
<form method="POST">
<textarea placeholder="Type your Meassage here" name="text" required class="text"></textarea>
<input type="submit" name="submit" value="send">
</form>
<?php
$link=mysql_connect('localhost','root','');
if(!$link)
 die('could not perform'.mysql_error());
if(!mysql_select_db('chat'))
die(mysql_error());
$r="insert into chat(text, user) values ('$_POST[text]','')";

if (mysql_query($r))
$q=mysql_query("Select * from chat where text is not null");
while($r=mysql_fetch_row($q))
echo " $r[0]<br>";
?>
</body>
</body>
</html>