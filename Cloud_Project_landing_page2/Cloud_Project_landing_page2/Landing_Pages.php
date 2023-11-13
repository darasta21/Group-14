<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Bank At Hand</title>
    <link rel="stylesheet" href="Landing_Pages.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script> 
    <link rel="stylesheet" href="contact.css">
    <script src="Landing_pages.js"></script>

</head>
<body style="background-color: rgba(246, 236, 236);">
    <div  class="Header" id="header">

        <h1>LOGO</h1>
       
        <ul class="Header__ul">
          
         
            <li class ="Header__li">
            <a href="#home" class="linkColor1"> Home </a>
            <div class='menu__indicator' ></div> 
            </li>

            <li class ="Header__li">
                <a href="#about" class="linkColor1"> About </a>
                <div class='menu__indicator' ></div> 
            </li>


                <li class ="Header__li">
                    <a href="#services" class="linkColor1"> Services </a>
                    <div class='menu__indicator' ></div> 
                </li>


                    <li class ="Header__li">
                        <a href="#testimonials" class="linkColor1"> Testimonials </a>
                        <div class='menu__indicator' ></div> 
                    </li>


                        <li class ="Header__li">
                            <a href="#contact" class="linkColor1"> Contact </a>
                            <div class='menu__indicator' ></div> 
                        </li>
         
          </ul>
    
          <div class='phoneMenu'>
    
          <img src="assets/menu.svg"  alt="menu" class="menuToggle" id="menu"> 
    
    
          <div class="sideBar trans1" id="sidebar">
          
          <img src= "assets/close.svg" alt="close" class='menuToggle menuClose' id="close">
    
            <ul class="phone__ul" id="phone__ul">
    
              <li>
                
              <a href="#home"><button class='nav__btn'> Home</button></a>
              <a href="#about"><button class='nav__btn'> About</button></a>
              <a href="#services"><button class='nav__btn'> Services</button></a>
              <a href="#testimonials"><button class='nav__btn'> Testimonials</button></a>
              <a href="#contact"><button class='nav__btn'> Contact</button></a>
               
              </li>
            
            </ul>
        
          </div>
        </div>
    
    </div>


        <section class="Hero__container" id="home">

            <div class="Text__aside">
            <h1>Mobile <br/>Bank At Hand</h1>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit temporibus, quia exercitationem ad vitae a cum ut in ducimus natus perspiciatis voluptatibus harum eos voluptate ex, aut eum ipsum corporis sapiente? Voluptas optio dolorem pariatur mollitia omnis deleniti, distinctio debitis?</p>
            
            <div class="Button__container">
                <a href="Login.php" class="button1">Login</a>
                <a href="terms.html" class="button2">Register</a>
                
            </div>
            
            
            </div>
        
            <div class="Hero__imgsection">
            <img src="assets/robot.png"  alt="menu" class='Hero__image'/>
            </div>
            
        </section>


        <section id ="about" class= "About__container">
            <h1>ABOUT</h1>
            
             
          <aside class="reusable" >
        
        <div class="Text">
              <h2 class="heading">Our Mission</h2>
              <p class="explanation">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis ipsam, sapiente consequatur architecto mollitia dignissimos dolor soluta dolores quod? Corrupti quidem hic quo minima fugiat, ratione ut odit autem? Veritatis impedit eaque expedita tenetur debitis sequi soluta reiciendis voluptatibus maxime veniam voluptate, magni explicabo molestiae labore hic nulla in alias?</p>
        </div>
        
              <div class="Picture">
        
              <h2 class="heading">Our Mission</h2>
              
              <div class='img__container'>
              <img src = "assets/about03.png" class='img'>
              </div>
              
              </div>
              
        
          </aside>


          <aside class="reusable" >
        
            <div class="Text">
                  <h2 class="heading">Our Mission</h2>
                  <p class="explanation">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis ipsam, sapiente consequatur architecto mollitia dignissimos dolor soluta dolores quod? Corrupti quidem hic quo minima fugiat, ratione ut odit autem? Veritatis impedit eaque expedita tenetur debitis sequi soluta reiciendis voluptatibus maxime veniam voluptate, magni explicabo molestiae labore hic nulla in alias?</p>
            </div>
            
                  <div class="Picture">
            
                  <h2 class="heading">Our Mission</h2>
                  
                  <div class='img__container'>
                  <img src = "assets/about02.png" class='img'>
                  </div>
                  
                  </div>
                  
            
              </aside>


              <aside class="reusable" >
        
                <div class="Text">
                      <h2 class="heading">Our Mission</h2>
                      <p class="explanation">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis ipsam, sapiente consequatur architecto mollitia dignissimos dolor soluta dolores quod? Corrupti quidem hic quo minima fugiat, ratione ut odit autem? Veritatis impedit eaque expedita tenetur debitis sequi soluta reiciendis voluptatibus maxime veniam voluptate, magni explicabo molestiae labore hic nulla in alias?</p>
                </div>
                
                      <div class="Picture">
                
                      <h2 class="heading">Our Mission</h2>
                      
                      <div class='img__container'>
                      <img src = "assets/about04.png" class='img'>
                      </div>
                      
                      </div>
                      
                
                  </aside>    
           </section>


           <section class='Testimonials__container' id="testimonials">
            <h1>TESTIMONIALS</h1>
           <div id="demo" class="carousel slide" data-bs-ride="carousel">
           
             
             <div class="carousel-indicators">
               <button type="button"  data-bs-target="#demo" data-bs-slide-to="0" class="active bg-dark"></button>
               <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="bg-dark"></button>
               <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class='bg-dark'></button>
               <button type="button" data-bs-target="#demo" data-bs-slide-to="3" class='bg-dark'></button>
             </div>
             
             
             <div class="carousel-inner opacity text-center">
           
               <div class="carousel-item active">
       
                  <div class='people__testimonial testimonial__margin'>
                   <div class='image'>
                    <img src="assets/people01.png" alt="profile pic"/>
                   </div>
       
                   <div class='testimonial testimonial__margin'>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, doloremque odit eos perferendis omnis tenetur pariatur quas vel quasi. Eveniet!</p>
                   </div>
       
                   <div class="Identity testimonial__margin">
                   <h3 class='Name'>Eng. Lucia Yen</h3>
                   <p>Software Engineer</p>
                   </div>
                 </div>
             </div>
       
             <div class="carousel-item ">
               <div class='people__testimonial testimonial__margin'>
                 <div class='image'>
                 <img src="assets/people02.png" alt="profile pic"/>
                 </div>
       
                 <div class='testimonial testimonial__margin'>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, doloremque odit eos perferendis omnis tenetur pariatur quas vel quasi. Eveniet!</p>
                 </div>
       
                 <div class="Identity testimonial__margin">
                 <h3 class='Name'>Chief Eng. Paul</h3>
                 <p class='Occupation'>Cyber security/Software Engineer</p>
                 </div>
               </div>
           </div>
           
               <div class="carousel-item ">
                   <div class='people__testimonial testimonial__margin'>
                   <div class='image'>
                   <img src="assets/people03.png" alt="profile pic"/>
                   </div>
       
                   <div class='testimonial testimonial__margin'>
                
                   </div>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, doloremque odit eos perferendis omnis tenetur pariatur quas vel quasi. Eveniet!</p>
                   <div class="Identity testimonial__margin">
                   <h3 class='Name'>Eng. Ethen</h3>
                   <p class='Occupation'>Software Engineer</p>
                   </div>
                 </div> 
               </div>
           
               <div class="carousel-item ">
                 <div class='people__testimonial testimonial__margin'>
                 <div class='image'>
                   <img src="assets/people02.png">
                 </div>
       
                   <div class='testimonial testimonial__margin'>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, doloremque odit eos perferendis omnis tenetur pariatur quas vel quasi. Eveniet!</p>
                   </div>
       
                   <div class="Identity testimonial__margin">
                   <h3 class='Name'>Eng. Mc Bride</h3>
                   <p class='Occupation'>Software Engineer</p>
                   </div>
                 </div> 
               </div>
               
             </div>
             
             
             <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
               <span class="carousel-control-prev-icon bg-dark"></span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
               <span class="carousel-control-next-icon bg-dark"></span>
             </button>
           </div>
           </section>

           <section class="Contatact__Container" id="contact">
           <h1>CONTACT</h1>
            <div class="card container-fluid ">
              <?php
                require 'PHPMailer/PHPMailer.php';
                require 'PHPMailer/SMTP.php';
                require 'PHPMailer/Exception.php';
        
                 use PHPMailer\PHPMailer\PHPMailer;
                 use PHPMailer\PHPMailer\SMTP;
                 use PHPMailer\PHPMailer\Exception;
        
                $mail = new PHPMailer(true);
                
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'ndivajordan@gmail.com';
                $mail->Password = 'uqwzdxtzbczmrejp';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
        
                
                // Database connection details
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "database contact";
        
                // Create a new database connection
                $conn = new mysqli($servername, $username, $password, $dbname);
        
                // Check the connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                 
                // Variable to track the status of form submission
                $formSubmitted = false;
                // Check if the form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Get the form data
                    $first_name = $_POST["firstname"];
                    $last_name = $_POST["lastname"];
                    $email = $_POST["email"];
                    $subject = $_POST["subject"];
                    $message = $_POST["message"];
        
                    // Insert the form data into the database
                    $sql = "INSERT INTO contact_messages (firstname, lastname, email, subject, message) VALUES ('$first_name', '$last_name', '$email', '$subject', '$message')";
        
                    if ($conn->query($sql) === TRUE) {
                        // Send the email
                        $to = "ndivajordan@gmail.com";
                        $mail->isHTML(true);
                        $mail->Subject = "New contact form submission";
                        $mail->Body = '<p>First Name: ' . $first_name . '<br/><br/>Last Name: ' . $last_name . '<br/><br/>Email: ' . $email . '<br/><br/>Subject: ' . $subject . '<br/><br/>Message: ' . $message . '</p>';
                        $mail->Headers = "From: $email";
                        // Set the 'From' header and sender name
                        $mail->setFrom($to, 'Elame Jordan');
                        // Set a custom 'Reply-To' address
                        $mail->addReplyTo($email, $first_name);
                        $mail->addAddress($to);
        
                  
                        if ($mail->send()) {
                          // Set the formSubmitted variable to true
                          $formSubmitted = true;
                          echo "<div class='alert alert-success w-50 text-center mt-5 mb-5 m-auto'>Message sent successfully!</div>";
                      } else {
                          echo "<div class='alert alert-danger w-50 text-center mt-5 mb-5 m-auto'>Failed to send message. Error: " . $mail->ErrorInfo . "</div>";
                      }
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                   
                }
        
                // Close the database connection
                $conn->close();
                ?>
        
             <?php if ($formSubmitted): ?>
        
                <h3 class='text-center'>Thank you for contacting Us!</h3>
                <p class='text-center'>We will get back to you shortly.</p>
               
                <?php else: ?> 
               <div class="contact">

                </div>   
                    <div class="card-body">
        
                        <form action="Landing_Pages.php" method="POST">
                          
                                
                            <div class="form-group">
      
                                <input type="text" class="form-control abstract_input" placeholder="First name" name="firstname" required>
                             </div>
        
                            <div class="form-group">
                                
                                <input type="text" class="form-control abstract_input" placeholder="last name" name="lastname" required>
                            </div>
                         
                            
                            <div class="row d-flex justify-content-center">
                                
                            <div class="form-group">
                                
                                <input type="email" class="form-control abstract_input" placeholder="Enter your Email" name="email" required>
                            </div>
        
                            <div class="form-group">
                                
                                <input type="text" class="form-control abstract_input" placeholder="Enter the subject" name="subject" required>
                            </div>
        
                            <div class="form-group">
                                
                                <textarea type="text" id="message" class="form-control abstract_input" placeholder="Type message" name="message" style="height: 30vh;" required></textarea>
                            </div>
                            </div>
        
                            <div class="form-group abstract_input">
                                <input type="submit" class="btn" id="contact_btn" value="submit" name="submit">
                            </div>
                        </form>               
                    </div>
                    <?php endif; ?>
                </div>
        
           </section>

<footer class="footer">

<div class="copyright">&copycopyright Mobile Bank At Hand</div>
</footer>          
</body>
</html>