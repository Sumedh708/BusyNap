<html>
<head> 
    <style>
        .error{
            color: #FF0000;
        }
        </style>
 <body>
 <form action="http://localhost/BusyNap/main3.php" align="center" method="POST">
     <link rel="stylesheet" href="styleforsignup.css"><title>Sign in</title></head>
    <h1>Please fill the details..</h1>
    <input type="text" placeholder="Name" class="name" name="USERNAME"required size="24" minlength="5"oninvalid="this.setCustomValidity('Please type your valid name ')"
    oninput="setCustomValidity('')" title="Please type your valid name "><br><br>
    <input type="password" placeholder="Password" class="password" required name="Password"><br><br>
    <input type="submit" value="Login" class="submit">
 </body>
</html>