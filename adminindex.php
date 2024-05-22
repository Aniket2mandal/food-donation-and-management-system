
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <div class="logo">Donate <b style="color: #06C167;">Dine</b></div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="adminindex.php" >Home</a></li>
                <li><a href="adminabout.html" class="active" >About</a></li>
                <!-- <li><a href="contact.html" >Contact</a></li> -->
                <li><a href="adminprofile.php" >Profile</a></li>
            </ul>
        </nav>
    </header>
<table class="tbdata">
            <tr>
                <th>S.N</th>
                <th>Name</th>
             
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
            include "config.php";
            $sql = mysqli_query($connection, "SELECT `id`,`fullname`,`email`FROM `login` ");
            $row = mysqli_num_rows($sql);
            if ($row > 0) {
                $i=1;
                while ($result = mysqli_fetch_assoc($sql)) {
                    
                    echo "
                    <tr>
                    <td>" .$i. "</td>
                    <td>" . $result['fullname'] . "</td>

                    <td>" . $result['email'] . "</td>
                    <td>
<a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='admindeleteuser.php?id=" . $result['id'] . "'class='btn' >Delete</a>
<a href='adminedituser.php?id=" . $result['id'] . "'class='btn2'>Update</a>
</td>
        </tr>
        ";
        $i++ ;
                }
            }
            ?>
        </table>
</body>
</html>   