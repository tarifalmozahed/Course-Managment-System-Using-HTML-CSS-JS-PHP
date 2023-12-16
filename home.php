<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Profile</title>
</head>
<body>

    <header class="header" data-header>
        <div class="container">
            <a href="landing.html" class="logo">
            <img
                src="./assets/images/logo.png"
                width="162"
                height="50"
                alt="logo"
            />
            </a>

        <nav class="navbar" data-navbar>

            <ul class="navbar-list">
                <li class="navbar-item">
                <a href="landing.html" class="navbar-link" data-nav-link>Home</a>
                </li>

                <li class="navbar-item">
                <a href="about.html" class="navbar-link" data-nav-link>About</a>
                </li>

                <li class="navbar-item">
                <a href="course.html" class="navbar-link" data-nav-link
                    >Courses</a
                >
                </li>

                <li class="navbar-item">
                <a href="home.php" class="navbar-link" data-nav-link>Profile</a>
                </li>

                <li class="navbar-item">
                <a href="contact.html" class="navbar-link" data-nav-link
                    >Contact</a
                >
                </li>
            </ul>
        </nav>
                <?php 

                    $id = $_SESSION['id'];
                    $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

                    while($result = mysqli_fetch_assoc($query)){
                        $res_Uname = $result['Username'];
                        $res_Email = $result['Email'];
                        $res_Age = $result['Age'];
                        $res_id = $result['Id'];
                    }
                ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

        </div>

    </header>
    
    
        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

        </div>


        <div id="profile-heading">
            <h1>My Profile</h1>
        </div>



    <main id="main-content">

       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            </div>
            <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>And you are <b><?php echo $res_Age ?> years old</b>.</p>
            </div>
            <br>


            <div class="change-profile">
                <a href='edit.php?Id=<?php echo $res_id ?>' class="btn">Change Profile</a>
            </div> 
          </div>
       </div>


       
    </main>

     <!-- FOOTER section start -->

     <footer
      class="footer"
      style="background-image: url('./assets/images/footer-bg.png')"
    >
      <div class="footer-top section">
        <div class="container grid-list">
          <div class="footer-brand">
            <a href="#" class="logo">
              <img
                src="./assets/images/logo.png"
                width="162"
                height="50"
                alt="logo"
              />
            </a>

            <p class="footer-brand-text">
              Online learning: Flexible, global education with self-paced study, 
              multimedia content, and cost-effective options. Join a diverse community, 
              enhance skills, and overcome challenges for a transformative learning experience.
            </p>

            <div class="wrapper">
              <span class="span">Add:</span>
              <address class="address">
                  <a href="https://www.google.com/maps/place/Daffodil International University" target="_blank">DSC, Ashulia, Savar, Dhaka.</a>
              </address>
          </div>

            <div class="wrapper">
              <span class="span">Call:</span>

              <a href="tel:+8801768179927" class="footer-link"
                >+880 1768-179927</a
              >
            </div>

            <div class="wrapper">
              <span class="span">Email:</span>

              <a href="mailto:tarifalmozahed@gmail.com" class="footer-link"
                >tarifalmozahed@gmail.com</a
              >
            </div>
          </div>

          <ul class="footer-list">
            <li>
                <p class="footer-list-title">Online Platform</p>
            </li>
        
            <li>
                <a href="https://www.codecademy.com/" class="footer-link" target="_blank">Codecademy</a>
            </li>
        
            <li>
                <a href="https://www.udacity.com/" class="footer-link" target="_blank">Udacity</a>
            </li>
        
            <li>
                <a href="https://www.coursera.org/" class="footer-link" target="_blank">Coursera</a>
            </li>
        
            <li>
                <a href="https://github.com/" class="footer-link" target="_blank">GitHub</a>
            </li>
        
            <li>
                <a href="contact.html" class="footer-link">Learn More Information</a>
            </li>
        </ul>
        
          <ul class="footer-list">
            <li>
              <p class="footer-list-title">Links</p>
            </li>

            <li>
              <a href="contact.html" class="footer-link">Contact Us</a>
            </li>

            <li>
              <a href="about.html" class="footer-link">About Us</a>
            </li>

            <li>
              <a href="blog.html" class="footer-link">Blogs</a>
            </li>

            <li>
              <a href="index.php" class="footer-link">Log Out</a>
            </li>

            <li>
              <a href="#" class="footer-link">Coming Soon</a>
            </li>
          </ul>

          <div class="footer-list">
            <p class="footer-list-title">Contacts</p>

            <ul class="social-list">
              <li>
                <a href="https://www.facebook.com/TarifAlMozahed" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://www.linkedin.com/in/tarif-al-mozahed-a5b21521a/" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://www.instagram.com/tarifalmozahed/" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://www.behance.net/tarifalmozahed" class="social-link">
                  <ion-icon name="logo-behance"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://www.youtube.com/@crackthecode7798" class="social-link">
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <p class="copyright">
            Copyright 2023 All Rights Reserved by
            <a href="#" class="copyright-link">Team Synergy</a>
          </p>
        </div>
      </div>
    </footer>

    <!-- FOOTER section end -->

    <!-- custom js link -->
    <script src="./assets/js/script.js" defer></script>

    <!-- ionicon link -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
</body>
</html>