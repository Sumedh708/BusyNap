<html>
<?php
include("dbl.php");
$q=mysql_query("select * from address where Username='$_POST[USERNAME]' and Password='$_POST[Password]'");

while($r=mysql_fetch_row ($q))

    {
        $val=$r[3];
        if($val=="manufacturer")
        {
            $s=mysql_query("Select * from address where Occupation='Bussiness Man'");

        }
        else
        {
            $s=mysql_query("Select * from address where Occupation='manufacturer'");
        }
    }
    while($r=mysql_fetch_row ($s))
    echo "<table border=1px cell spacing=19 cellpadding=17 width=60% align=center><tr><td>$r[0]<td> $r[1] <td> $r[3]<td> $r[4] <td> $r[5]<td width=5%><b><form action=chat.php method=POST><input type=submit value=+></b></form></tr></table> ";  
    
    
    
?>
</html>