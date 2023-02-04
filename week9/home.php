<?php if(!isset($_SESSION['user'])) // The exact conditional depends on your login-system implementation
{
    header('Location: register.php'); // Instructs the visitor's browser to redirect
    exit; // <-- What you want. Prevents further code from being executed, works as a security measure.
}
?>

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
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    
</head>

<body>
    <div class="wrapper">
      <header>
        <b><a href="index.php">mnturingan</a></b>
          <nav>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                  <li><a href="about.php">About Me</a></li>
                  <li><a href="resources.php">Resources</a></li>
            </ul>
          </nav>
      </header>
            
      <main>
  
      </main>
    </div>
 
    
    <script src=""></script>
</body>
</html>
