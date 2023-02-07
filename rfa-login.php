<?php 
        ob_start();
        session_start();

    // echo($_SESSION['uid']);exit();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R F A | Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="navbar">
        <div class="logo-text">
            <a href="home.php"><h3>FMC_DB</h3></a>
        </div>
        <div class="nav-link">
            <ul>
                <a href=""><li>RFA</li></a>
                <a href="./TSA/tsa-login.php"><li>TSA</li></a>
                <a href="./project/project-login.php"><li>Project</li></a>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="form-wrapper">
            <form action="rfa-login.php" method="POST">
                <h2>Admin Login</h2>
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <div class="action-button">
                    <button type="submit" name="submit">Login</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
        </div>    
    </div>
</body>
</html>

<?php
	include('dbcon.php');

    if (isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];


        $qry = "SELECT * FROM `admin` WHERE user = '$username' AND `password` = '$password'";
            
        $result = mysqli_query($connection,$qry);
        $row = mysqli_num_rows($result);

        if(!$row || $row == 0){

            echo "<script> alert('Incorrect Username or Password') </script>";
        
        }

        else{

            while ($data = $result->fetch_assoc()) {
            
            $id = $data['id'];

            // echo "id".$id;

            // session_start();
            
            $_SESSION['uid'] = $id;
            exit(header("location:index.php"));
            
		}

	}

	}


 ?>