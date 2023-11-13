<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="all.min.css">
    <script src="Landing_pages.js"></script>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="Landing_Pages.css">
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
            <h1 id="title">Login</h1>
            <?php
       if (isset($_POST["login"])){
         $eMail = $_POST["email"];
         $cardNumber = $_POST["cardnumber"];
         $password = $_POST["password"];
         require_once "database.php";
         $sql = "SELECT * FROM bank_reg WHERE email = '$eMail' AND cardnumber = '$cardNumber'";
         $result = mysqli_query($conn, $sql);
         $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

         if($user){
            if(password_verify($password, $user["password"])){
               //session_start();
               //$_SESSION["user"] = "yes";
               header("location: index.html");
               die();
            }else{
               echo "<div class='alert alert-danger'>Password does not match</div>";
            }
         }else{
            echo "<div class='alert alert-danger'>Incorrect cardnumber or Email</div>";
         }

       }
       
    ?>
            <form action="Login.php" method="post">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="email" name="email" id="input">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-credit-card"></i>
                        <input type="password" placeholder="card No" name="cardnumber" id="input">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="password" name="password" id="input">
                    </div>
                </div>
                <div class="btn-field">
                    <button type="button" class="disable" id="signupBtn">Sign up</button>
                    <input type="submit" id="loginBtn" value="Login" name="login">
                </div>
            </form>
    </div>
        </div> 

<footer class="footer">
<div class="copyright">&copycopyright Mobile Bank At Hand</div>
</footer>  
</body>
<script src="all.min.js"></script>
<script>
    document.getElementById("signupBtn").addEventListener("click", function(){
        window.location.href = "terms.html";
    });

    
</script>
</html>