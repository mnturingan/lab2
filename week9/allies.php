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

    <link rel="stylesheet" type="text/css" href="css/style2.css">

    
</head>

<body>
    <div class="wrapper">
      <header>
        <b><a href="index.php">mnturingan</a></b>
          <nav>
            <ul>
                  <li><a href="about.php">About Me</a></li>
                  <li><a href="resources.php">Resources</a></li>
            </ul>
          </nav>
      </header>
            
      <main>

      <!-- select data mysql webprogmi212 -->
            <?php
        $servername = "localhost";
        $username = "webprogmi212";
        $password = "webprogmi212";
        $dbname = "webprogmi212";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, firstname, lastname, email FROM mnturingan_myallies";
        $result = $conn->query($sql);

        echo "<h1>My Allies</h1>";
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            echo "<br>";
            echo "id: " . $row["id"]. " - " . $row["firstname"]. " " . $row["lastname"]. " " . $row["email"]. "<br>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        ?>

        
      </main>
    
  </div>


    <script src=""></script>
</body>
</html>
