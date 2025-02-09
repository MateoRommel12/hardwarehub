<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
       

       * {
           padding: 0;
           margin: 0;
           box-sizing: border-box;
           font-family: 'Poppins', sans-serif;
       }
       
       body {
           background: #242222;
       }
       
       .background-image {
           position: fixed;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           z-index: -1;
       }
       
       .background-image img {
           width: 100%;
           height: 100%;
           object-fit: cover;
       }
       
       .container {
           display: flex;
           align-items: center;
           justify-content: center;
           height: 100vh;
       }
       
       .box {
           background: #fdfdfdde;
           display: flex;
           flex-direction: column;
           padding: 25px 25px;
           border-radius: 20px;
           box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1), 0 32px 64px -48px rgba(0, 0, 0, 0.5);
       }
       
       .form-box {
           width: 450px;
           margin: 0px 10px;
       }
       
       .form-box header {
           font-size: 25px;
           font-weight: 600;
           padding-bottom: 10px;
           border-bottom: 1px solid #e6e6e6;
           margin-bottom: 10px;
       }
       
       .form-box form .field {
           display: flex;
           margin-bottom: 10px;
           flex-direction: column;
       }
       
       .form-box form .input input {
           height: 40px;
           width: 100%;
           font-size: 16px;
           padding: 0 10px;
           border-radius: 5px;
           border: 1px solid #ccc;
           outline: none;
       }
       
       .btn {
           height: 35px;
           background: rgb(0, 0, 0);
           border: 0;
           border-radius: 5px;
           color: #fff;
           font-size: 15px;
           cursor: pointer;
           transition: all .3s;
           margin-top: 10px;
           padding: 0px 10px;
       }
       
       .btn:hover {
           opacity: 0.82;
       }
       
       .submit {
           width: 100%;
       }
       
       .links {
           margin-bottom: 15px;
       }
       
       .sign-in-link {
           color: #6b006e;
         }
         
           </style>
</head>

<body>
    <div class="background-image">
        <img src="Pics/HARDWARE.png" alt="Hardware Tools">
    </div>
      <div class="container">
        <div class="box form-box">
            <?php 
             
              include("php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='index.php'><button class='btn'>Go Back</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                }
              }else{

            
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>