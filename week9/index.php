<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Page</title>

    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="images/pfp-me.png">
        
    <!--Custom Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!--Fontawesome-->
    <script src="https://kit.fontawesome.com/8297c50d72.js" crossorigin="anonymous"></script>

    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    
    
</head>

<body>
    <div class="wrapper">
        <header>
            <b><a href="index.php">mnturingan</a></b>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Me</a></li>
                    <li><a href="resources.php">Resources</a></li>
                </ul>
            </nav>
        </header>
            
        <main>
            <div class="left-col">
                <h1>Hi, I'm Mark and this is my personal page.</h1>
                <p>Looking for alliances.</p>
                <div class="cta-btns">
                    <a href="register.php" class="primary-cta">
                    <i class="fa-solid fa-hand-fist"></i> 
                        <span>Join Alliance</span> 
                    </a>
                    <a href="allies.php" class="secondary-cta" id="button">
                    <i class="fa-solid fa-people-group"></i>
                        <span>View Alliance</span> 
                    </a>
                </div>
            </div>
            <div class="right-col">
                <img id="stud-img" src="images/student.png" alt="Student Illustration">
            </div>
        </main>
    </div>

</body>
</html>
