<?php
session_start();
$user=$_SESSION['username'];
if($user == true){

}
else{
  header("location:login.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Donate</title>
    <link rel="stylesheet" href="fooddonate.css">
</head>
<body style="background-color: #06C167;">
    <div class="container">

        <div class="regformf">
            <form action="fooddonateinfo.php" method="post">

                
                <p class="logo">Food <b style="color: #06C167;">Donate</b></p>
                
                <div class="input">
                    <label for="foodname">Food Name:</label>
                    <input type="text" id="foodname" name="foodname" required/>
                </div>
                
                <div class="radio">
                    <label for="meal">Meal type:</label> 
                    <br><br>
                    <select name="mealtype" id="mealtype">
  <option value="veg">veg</option>
  <option value="NON-veg">non-veg</option>
</select>
                </div>
                <br>
                <div class="input">
                    <label for="food">Select the Category:</label>
                    <br>
                    <select name="category" id="category">
  <option value="raw">Raw Food</option>
  <option value="cooked">Cooked Food</option>
  <option value="pascked">Packed Food</option>

</select>
                    <br>
                </div>
                <div class="input">
                    <label for="quantity">Quantity:(number of person /kg)</label>
                    <input type="text" id="quantity" name="quantity" required/>
                </div>
                <b><p style="text-align: center;">Contact Details</p></b>
                <div class="input">
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required value="<?php echo $_SESSION['name'] ?>"/>
                        <label for="name">Email:</label>
                        <input type="text" id="name" name="email" required value="<?php echo $_SESSION['username'] ?>"/>
                    </div>
                    <div>
                        <label for="phoneno">PhoneNo:</label>
                        <input type="text" id="phoneno" name="phoneno" maxlength="10" pattern="[0-9]{10}" required />
                    </div>
                </div>
                <div class="input">
                    <label for="location"></label>
                    <label for="district">District:</label>
                    <select id="district" name="district" style="padding:10px;">
                        <option value="Kathmandu">Kathmandu</option>
                        <option value="Pokhara">Pokhara</option>
                        <option value="Chitwan">Chitwan</option>
                        <option value="Nepalgunj">Nepalgunj</option>
                        <option value="Morang">Morang</option>
                        <option value="Illam">Illam</option>
                        <option value="Bhaktapur">Bhaktapur</option>
                        <option value="Lalitpur">Lalitpur</option>
                    </select> 
                    <label for="address" style="padding-left: 10px;">Address:</label>
                    <input type="text" id="address" name="address" required/><br>
                </div>
                <div class="btn">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
