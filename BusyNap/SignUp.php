<html>
<head> 
    <style>
        .error{
            color: #FF0000;
        }
        </style>
 <body>
 <form action="http://localhost/BusyNap/main2.php" align="center" method="POST">
     <link rel="stylesheet" href="styleforsignup.css"><title>Sign in</title></head>
    <h1>Please fill the details..</h1>
    <input type="text" placeholder="Type your First name" class="name" name="Firstname"required size="24" minlength="5"oninvalid="this.setCustomValidity('Please type your valid name ')"
    oninput="setCustomValidity('')" title="Please type your valid name "><br><br>
    
    <input type="text" placeholder="Type your Last name" class="name" name="Lastname"required size="24" minlength="3"oninvalid="this.setCustomValidity('Please type your valid name ')"
    oninput="setCustomValidity('')" title="Please type your valid name "><br><br>
    
    <input type="password" placeholder="Password" class="password" required name="Password"><br><br>
    <input type="email" placeholder="Email adress" class="email" name="Email" required oninvalid="this.setCustomValidity('Please type your valid email address')"
    oninput="setCustomValidity('')" title="please type your valid email address"><br>
    <h2>Type of Client</h2>
    <input type="radio" name="Occupation" value="Bussiness Man" ><b>Bussiness Man</b><br><br>
    <input type="radio" name="Occupation" value="manufacturer"><b>manufacturer</b>
    <br><br>
    
    <h2><b>Bussiness or manufacture Type</h2></b>
    <input type="radio" name="businesstype" value="grocery"><b>Grocery</b><br><br>
    <input type="radio" name="businesstype" value="Clothes"><b>Clothes</b<b><br><br>
    <input type="radio" name="businesstype" value="Kitchen Utensils"><b>Kitchen Utensils</b><br><br>
    <input type="radio" name="businesstype" value="Furnitures"><b>Furnitures</b><br><br>
    <input type="radio" name="businesstype" value="Electronic equipments"><b>Elctronic equipments</b><br><br><br>
    <script>
    if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        console.log(latitude,longitude);
    });   
}
</script>
<input type="text" placeholder="Country" name="country" class="country" required ><br><Br><br>
    <input type="text" placeholder="State" name="state" class="state" required ><br><Br><br>
    <input type="submit" value="Sign Up" class="submit" align>

    
    
    </form>
</body>
</html>


