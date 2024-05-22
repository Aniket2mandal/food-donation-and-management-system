<?php
include "config.php";
session_start();
$user=$_SESSION['username'];
if($user == true){

    $id = $_GET['id'];
    $_SESSION['ID']=$id;
    $sql=mysqli_query($connection,"SELECT `fullname` FROM `login` WHERE `id`=$id");
    $sqll=mysqli_query($connection,"SELECT `email` FROM `login` WHERE `id`=$id");
    $row=mysqli_num_rows($sql);
    if($row>0){
        $data=implode(mysqli_fetch_assoc($sql));
        $email=implode(mysqli_fetch_assoc($sqll));
     $_SESSION['uname']=$data;
     $_SESSION['email']=$email;
       
    }
                        
}
else{
  header("location:login.html");
}
?>


<form action="edituser.php" method="post" onsubmit="return confirm('Are you sure you want to update?');">
                <div class="reg">
                    <p>UPDATE</p>
                </div><br>
                <!-- Firstname: -->
                <input type="text" required id="fnam" required name="fnam" value="<?php echo $_SESSION['uname'] ?>"><br><br>
                <!-- Lastname: -->
               
                <!-- Email:<br> -->
                <input type="email" required id="emai" required name="emai" value="<?php echo $_SESSION['email']?>"><br><br>
                <!-- Password:<br>
            <input type="password" required id="pasw" required name="psw" placeholder="password"><br><br>

     -->
                <!-- <input type="radio"><a href="forgot.html">Forgot password?</a><br><br> -->
                <button type="submit" name="submit">UPDATE</button>

            </form>