<html>
  <head><style>
    

.container{
  display: block;
  border: none;
  height: 28px;
  width: 98px;
  text-align:center;
  background: none;
  font-weight: bold;
  cursor: pointer;
}
.container2{
  display: block;
  border: none;
  height: 28px;
  width: 88px;
  text-align:center;
  background: none;
  font-weight:bold;
  cursor: pointer;
  size: 2px;
  
}


  </style><title>BusyNap</title></head>

<b><button class="container" id="container"  onclick=myFunction() >&#x25BE Suggested</button></b><br>
<script>
  function myFunction()
  {
    var x=document.getElementById("dropdown");
    var y=document.getElementById("container");
    if (x.style.display == "none") {
    x.style.display = "block";
    y.innerHTML="&#x25B4 Suggested<br>";
    
     } 
  else {
    x.style.display = "none";
     
    y.innerHTML="&#x25BE Suggested<br>"
  }
  
  
  
  }
  </script>
<div id="dropdown">


<?php
include("dbl.php");
 
 $r="insert into address(Firstname,Lastname,Email,Password,Occupation,country,bussinesstype,state) values ('$_POST[Firstname]','$_POST[Lastname]', '$_POST[Email]', '$_POST[Password]', '$_POST[Occupation]', '$_POST[country]', '$_POST[businesstype]', '$_POST[state]')";
 
 if(mysql_query($r))
 
 if($_POST[Occupation]=='manufacturer')
 $q=mysql_query("Select * from address where Occupation='Bussiness Man'  && state='$_POST[state]' && country='$_POST[country]' ");
  else
  $q=mysql_query("Select * from address where Occupation='manufacturer' &&  state='$_POST[state]' && country='$_POST[country]' ");
  

if(mysql_fetch_row($q)==null)
{
  echo "<b><font size=6 >No suggestions for today</b></font><br><br>";

}
else
{
  echo "<table border=1px cell spacing=19 cellpadding=17 width=60% ><td><b>Name<td><b>Email Id<td><b>Occupation<td><b>Bussiness type<td><b>Country<td><b>State</b></table><br>";
  while($r=mysql_fetch_row($q)){
    echo "<table border=1px cell spacing=19 cellpadding=17 width=60% ><tr><td>$r[0]<td> $r[2]<td> $r[4] <td> $r[6]<td> $r[5]<td> $r[7]  <td width=5%><b><form action=chat.php method=POST><input type=submit value=+></b></tr></form></table> ";
    }
}
?>
</div>
<b><button class="container" id="container2"  onclick=myFunction2() >&#x25BE Other</button></b>
<script>
  function myFunction2()
  {
    var x=document.getElementById("dropdown2");
    var y=document.getElementById("container2");
    if (x.style.display == "none") {
    x.style.display = "block";
    y.innerHTML="&#x25B4 Other";
     } 
  else {
    x.style.display = "none";
    y.innerHTML="&#x25BE Other";
  }
    
   
  }
  </script>
<div id="dropdown2">
<table border=1px cell spacing=19 cellpadding=17 width=60% ><td><b>Name<td><b>Email Id<td><b>Occupation<td><b>Bussiness type<td><b>Country<td><b>State</b></table><br>
<?php

include("dbl.php");
 
 if($_POST[Occupation]=='manufacturer')
 $q=mysql_query("Select * from address where Occupation='Bussiness Man' && state!='$_POST[state]' && country!='$_POST[country]'");
  else
  $q=mysql_query("Select * from address where Occupation='manufacturer' &&  state!='$_POST[state]' && country!='$_POST[country]'");

while($r=mysql_fetch_row($q))

echo "<table border=1px cell spacing=19 cellpadding=17 width=60% ><tr><tr><td>$r[0] $r[1]<td> $r[2]<td> $r[4] <td> $r[6]<td> $r[5]<td> $r[7] <td width=5%><b><form action=chat.php method=POST><input type=submit value=+></b></tr></form></table> ";

?>
</div>
</html>