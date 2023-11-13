<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Registration.css">
    <link rel="stylesheet" href="Landing_Pages.css">
    <script src="Landing_pages.js"></script>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <script src="https://kit.fontawesome.com/9bd0392cd7.js" crossorigin="anonymous"></script>
</head>
<body>
<div  class="Header" id="header">

<h1>LOGO</h1>

<ul class="Header__ul">
 
    <li class ="Header__li">
    <a href="landing_Pages.php" class="linkColor1"> Home </a>
    <div class='menu__indicator' ></div> 
    </li>

    <li class ="Header__li">
        <a href="landing_Pages.php#about" class="linkColor1"> About </a>
        <div class='menu__indicator' ></div> 
    </li>


        <li class ="Header__li">
            <a href="landing_Pages.php#services" class="linkColor1"> Services </a>
            <div class='menu__indicator' ></div> 
        </li>


            <li class ="Header__li">
                <a href="landing_Pages.php#testimonials" class="linkColor1"> Testimonials </a>
                <div class='menu__indicator' ></div> 
            </li>


                <li class ="Header__li">
                    <a href="landing_Pages.php#contact" class="linkColor1"> Contact </a>
                    <div class='menu__indicator' ></div> 
                </li>
 
  </ul>

  <div class='phoneMenu'>

  <img src="assets/menu.svg"  alt="menu" class="menuToggle" id="menu"> 

  <div class="sideBar trans1" id="sidebar">
  
  <img src= "assets/close.svg" alt="menu" class='menuToggle menuClose' id="close" onclick="click()">

    <ul class="phone__ul">

      <li>
        
      <a href="landing_Pages.php"><button class='nav__btn'> Home</button></a>
      <a href="landing_Pages.php#about"><button class='nav__btn'> About</button></a>
      <a href="landing_Pages.php#services"><button class='nav__btn'> Services</button></a>
      <a href="landing_Pages.php#testimonials"><button class='nav__btn'> Testimonials</button></a>
      <a href="landing_Pages.php#contact"><button class='nav__btn'> Contact</button></a>
       
      </li>
    
    </ul>

  </div>
</div>

</div>
<div class="container">

    <div class="form-box">
        <h1 id="title">Registration</h1>
        <?php
   if(isset($_POST["submit"])){
    
    $userName = $_POST["username"];
    $eMail = $_POST["email"];
    $cardNumber = $_POST["cardnumber"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["repeat_password"];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $passwordHashtwo = password_hash($confirmPassword, PASSWORD_DEFAULT);
    $errors = array();

    if(empty($userName) OR empty($eMail) OR empty($password) OR empty($confirmPassword) ){
        array_push($errors,"All fields are required");
    }

    if(!filter_var($eMail, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email is not valid");
    }

    
    if(strlen($cardNumber)<16){
        array_push($errors, "Card number must be 18 digits long");
    }

    if(strlen($password)<8){
        array_push($errors, "Password must be atleast 8 characteres long");
    }

    if($password!==$confirmPassword){
        array_push($errors, "Password does not match");
    }
    //We need to connect to the database before checking if the email entered already exists
    require_once "database.php";
    $sql = "SELECT * FROM bank_reg WHERE email='$eMail'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows( $result);

    $sql2 = "SELECT * FROM bank_reg WHERE cardnumber='$cardNumber'";
    $result2 = mysqli_query($conn, $sql2);
    $rowCount2 = mysqli_num_rows($result2);

    if($rowCount>0){

        array_push($errors, "Email already exists");
    }

    if($rowCount2>0){

        array_push($errors, "Bank Card in use already");
    }

    if(count($errors)>0){

        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }else{

        // we will insert the data into the database table bank_reg
        
        $sql = 'INSERT INTO bank_reg(username, email, cardnumber, password) VALUES(?, ?, ?, ?)';
        $stmt = mysqli_stmt_init($conn);
        $preparestmt = mysqli_stmt_prepare($stmt,$sql);

        if($preparestmt){

            mysqli_stmt_bind_param($stmt,"ssss",$userName,$eMail,$cardNumber,$passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>You are registered successfully</div>";
            header("location: Login.php");
        }else{
          
            die("Something went wrong");
        }
    }
}
?>
        <form action="Registration.php"  method="post">
            <div class="input-group">
                <div class="input-field" id="name">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="name" name="username" id="input">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="email" name="email" id="input">
                </div>
                <div class="input-field" id="card">
                    <i class="fa-solid fa-credit-card"></i>
                    <input type="password" placeholder="Card No" name="cardnumber" id="input">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="password" name="password" id="input">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="confirm password" name="repeat_password" id="input">
                </div>

                <p>Lost password <a href="">Click Here!</a></p>
            </div>
            <div class="btn-field">
                <input type="submit" id="signupBtn" value="Sign Up" name="submit">
                <button type="button" class="disable" id="loginBtn">Login</button>
            </div>
        </form>
    </div>
</div>
<footer class="footer">

<div class="copyright">&copycopyright Mobile Bank At Hand</div>
</footer>
</body>
<script>
    document.getElementById("loginBtn").addEventListener("click", function(){
        window.location.href = "Login.php";
    });
</script>
</html>