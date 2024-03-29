
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>hasan_2007107_portfolio</title>
    <link rel="stylesheet" href="abidportfolio.css">
    <script src="abidportfolio.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-fXJ4hPUk3JEUA3dKNnzuJKLq/O5iWM/MQyRz+lO6qHRrRZ+WzIzz3Br/3RBjckKg" crossorigin="anonymous">


</head>

<body>

    <div id="header">
        <div class="container">
            <nav>
                <img src="assets/forhtml00.jpeg" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                
                <i class="far fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>Student</p>
                <h1>Hola ! I'm Hasan </h1>

            </div>
        </div>
    </div>
    <!---About--->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="assets\forhtml00.jpeg">
                </div>
                <div class="about-col-2">
                    <h1 class="subtitle">About me </h1>
                    <p>Hola ! Buenas Dias,Mi nombre Khandoker Abid Hasan.
                         Yo soy estudiante en Khulna 
                         University of Engineering and Technology !</p>
                         <div class="tab-titles">
                            <p class="tab-links active-link" onclick="opentab('education')">Education</p>
                            <p class="tab-links active-link" onclick="opentab('skill')">Skills</p>
                            <p class="tab-links active-link" onclick="opentab('experience')">Experience</p>
        
                        </div>
                </div>
            
                <div class="content active-tab" id="skill">
                    <ul>
                        <li><span>UI/UX</span> <br>Designer</li>
                        <li><span>Android</span> <br>Design ANdroid Studio</li>
                        <li><span>Arduino</span> <br>Design Hardware</li>
                    </ul>
                </div>
                <div class="content" id="education">
                    <ul>
                        <li><span>Khulna University of Engineering and Technology.</span> <br>Current Student</li>
                       
                    </ul>
                </div>
                <div class="content" id="experience">
                    <ul>
                        <li><span>Khulna University of Engineering and Technology.</span> <br>Current Student</li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-------!About----->
    <!-----Services-->
    <div id="services">
        <div class="container">
            <h1 class="subtitle">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="far fa-code"></i>
                    <h2>Web Design</h2>
                    <p>Fast Web Design with HTML-CSS-JavaScript </p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fas fa-crop"></i>
                    <h2>UI Design</h2>
                    <p>Fast UI Design with HTML-CSS-JavaScript </p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fab fa-app-store"></i>
                    <h2>App Design</h2>
                    <p>Fast App Design with Android Studio </p>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    
    <div id="porfolio">
        <div class="container">
            <h1 class="subtitle">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="assets\pic01.jpg">
                    <div class="layer">
                        <h3>Android App</h3>
                        <p>Making android app with android Studio</p>
                        <a href="#"><i class="fas fa-external-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="assets\pic02.jpg">
                    <div class="layer">
                        <h3>Hardware Design</h3>
                        <p>Making hardware with Arduino Uno and Proteus</p>
                        <a href="#"><i class="far fa-microchip"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="assets\pic03.jpg">
                    <div class="layer">
                        <h3>Web Design</h3>
                        <p>Making web application with HTML-CSS-JavaScript-PHP-ASP</p>
                        <a href="#"><i class="fas fa-browser"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="subtitle">Contact Me</h1>
                    <p><i class="fas fa-paper-plane"></i>hasan2007207@stud.kuet.ac.bd</p>
                    <p><i class="fas fa-phone-square"></i>01568336152</p>
                    <div class="social-icons">
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="far fa-envelope"></i></a>
                    </div>
                </div>
                <div class="contact-right">
                    <form action="abidportfolio.php" method="POST">
                        <input type="text" name="Name" placeholder="Your Name :" required>
                        <input type="email" name="Email" placeholder="Your Email :" required>
                        <textarea name="Message" rows="6" placeholder="Your Message :"></textarea>
                        <button type="submit" id="subbutt">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>



<?php

// echo"Hello World";

// foreach($_POST as  $key => $value) {
//     echo "Key : ". $key ." value : ". $value ."<br>";
// }

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // echo"first if";

    // if(isset($_POST['submit']))
    {
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $message=$_POST['Message'];
        // echo "what";

        // echo "{$name} {$email}<br>";

        $connection= mysqli_connect('localhost:3306','root','123456','abid');
        if(!$connection){die("Connection Failed" . mysqli_connect_error());}
        
        $insert_query = "INSERT INTO abidtable (Name,Email,Message) VALUES ('$name','$email','$message')";

        $insert = mysqli_query($connection,$insert_query);
        // if($insert)
        // die ("successfull");
        // if(!$insert){die("Not inserted" . mysqli_error($connection));}
        // echo "Connected succesfully !";
        mysqli_close($connection);
    }
}
?>
=======
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{



    if(isset($_POST['Submit']))
    {
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $message=$_POST['Message'];

        $connection= mysqli_connect('localhost','root','12345','abid');
        if(!$connection){die("Connection Failed" . mysqli_connect_error());}
        
        $insert_query = "INSERT INTO abidtable (Name,Email,Message)";
        $insert_query = "VALUES ('$name','$email','$message')";

        $insert = mysqli_query($connection,$insert_query);
        if(!$insert){die("Not inserted" . mysqli_error($connection));}
        echo "Connected succesfully !";
    }
    mysqli_close($connection);
}
?>

