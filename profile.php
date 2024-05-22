
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
    <title>Profile</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="logo">Food <b style="color: #06C167;">Donate</b></div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="profile.php" class="active">Profile</a></li>
            </ul>
        </nav>
    </header>

    <div class="profile">
        <div class="profilebox">
            <p class="headingline"> <img src="" alt="" style="width:40px; height: 25px;; padding-right: 10px; position: relative;">Profile</p>
            <br>
            <div class="info" style="padding-left:10px;">
                <img src="user.png" alt="User Logo" class="user-logo">
             <table>
                <tr>
                    <th>Name:</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>
                    <?php
                    
                    $user=$_SESSION['username'];
                    include "config.php";
$sql=mysqli_query($connection,"SELECT `fullname` FROM `login` WHERE `email`='$user'");
$row=mysqli_num_rows($sql);
if($row>0){
    $data=implode(mysqli_fetch_assoc($sql));
    echo $data;
  
}
                    ?></td>

<td>
                    <?php
                 
                    $user=$_SESSION['username'];
                    include "config.php";
$sql=mysqli_query($connection,"SELECT `email` FROM `login` WHERE `email`='$user'");
$row=mysqli_num_rows($sql);
if($row>0){
    $data=implode(mysqli_fetch_assoc($sql));
    echo $data;
}
                    ?></td>
                </tr>
             </table>
            <a href="logout.php"><button type="submit">LOGOUT</button></a> 
            </div>
            <hr>
            <br>
            <p class="heading">Your Donations</p>
            <div class="table-container">
                <div class="table-wrapper">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Food</th>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Date/Time</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
            include "config.php";
            $sql = mysqli_query($connection, "SELECT `id`,`foodname`,`mealtype`,`category`,`quantity` FROM `fooddonate` WHERE  `email` ='$user' ");
            $row = mysqli_num_rows($sql);
            if ($row > 0) {
                $i=1;
                while ($result = mysqli_fetch_assoc($sql)) {
                    
                    echo "
                    <tr>
                    <td>" .$i. "</td>
                    <td>" . $result['foodname'] . "</td>
                    <td>" . $result['mealtype'] . "</td>
                    <td>" . $result['category'] . "</td>
                    <td>" . $result['quantity'] . "</td>

        </tr>
        ";
        $i++ ;
                }
            }
            ?>
                                <!-- <td>
<a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='deleteuseradm.php?id=" . $result['id'] . "'class='btn' >Delete</a>
<a href='edituseradm.php?id=" . $result['id'] . "'class='btn2'>Update</a>
</td> -->
                            <!-- Add more donation history rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
