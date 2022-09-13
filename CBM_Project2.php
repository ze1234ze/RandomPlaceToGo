<!DOCTYPE html>

<html>

<head>
    <title>CBM_Project</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/CBM_Project2.css" type="text/css">

</head>

<body>
    <?php include   'CBM_ProjectFunk.php'; ?>


    <div class="header">
        <ul>
            <li style="display:inline-block;">
                <a href="CBM_ProjectLogin.php" style="text-decoration:none; color:#ffffff;">
                    <pre>Subscribe  </pre>
                </a>
            </li>
            <li style="display:inline-block;">
                <a href="CBM_ProjectContact.php" style="text-decoration:none; color:#ffffff;">
                    <pre>  Contact us  </pre>
                </a>
            </li>
        </ul>
    </div>

        <br></br>
        <br></br>
        <br></br>

        <h4>I ve got a random place for you <?php echo $name ?>!</h4><br>
    

    <h3><?php echo "The Name: "  . $line["restaurantname"] . "<br>";
        echo "Describtion: "  . $line["beschreibung"] . "<br>";
        echo "Adress: "  . $line["adress"] . "<br>";
        echo "Kontakt: "  . $line["kontakt"] . "<br>";?>
        <img src='<?php echo $line["bild"];?>'style="max-width:600px;width:100%">

        </h3><br>


    <br></br>



    <a href="CBM_Project.html">
        <p>One more!</p>
    </a>




    <br></br>
    <br></br>
    <footer>
        <h3 class="footer2"> All Rights are not Reserved.</h3>
    </footer>



</body>

</html>