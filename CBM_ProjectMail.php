<!DOCTYPE html>

<html>

<head>
    <title>CBM_Project</title>
    <meta charset="utf-8">
    <meta name="random" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/CBM_Project.css" type="text/css">

</head>

<body>

    <div class="header">
        <ul>
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
    <br></br>
    <br></br>
    <br></br>
    <br></br>

    <?php

    $email = $_POST["email"];


    $search3 = "SELECT * FROM cbm_projectdata WHERE emailof = '$email'";

    try {
        $data_bank3 = new PDO(
            "mysql:dbname=test;host=localhost",
            "root",       // username 
            ""           // password
        );




        $result3 = $data_bank3->query($search3);
        $antwort3 = $result3->fetchAll(PDO::FETCH_ASSOC);




        foreach ($antwort3 as $line3) {
            if ($line3 = $email) { ?>
                <h1 class="text"><?php echo "This email is already exist!"; ?></h1>

                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>

                <a href="CBM_ProjectLogin.php">
                    <h1>Try one more time!</h1>
                </a>
            <?php
                die();
            } ?>

        <?php

        }

        $data_bank3 = null;  // macht variabel frei

    } catch (PDOException $search) {
        echo $search->getMessage();
    }



    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $budget = $_POST["budget"];


    // $search2 = "SELECT * FROM cbm_projectdata WHERE  emailof = $email;


    $sql = "INSERT INTO cbm_projectdata(nameof,emailof,ageof,genderof,budgetof)" .
        "VALUES (:name,:email,:age,:gender,:budget)";

    try {
        $data_bank = new PDO(
            "mysql:dbname=test;host=localhost",
            "root",
            ""
        ); ?>

        <h1 class="text"><?php echo "You will recive a new random place to go everyday!"; ?></h1>

        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>


        <a href="CBM_Project.html">
            <h2>Back to the random!</h2>
        </a>


    <?php



        $eingabe = $data_bank->prepare($sql);  // wir bereiten den sql befehl vor

        $eingabe->bindParam(':name',  $name); // verbinden wir die parameter
        $eingabe->bindParam(':email', $email);
        $eingabe->bindParam(':age', $age);
        $eingabe->bindParam(':gender', $gender);
        $eingabe->bindParam(':budget', $budget);
        $eingabe->execute();



        //$a_result= $a_data_bank->query($a_sql);
        //$a_antwort= $a_result->fetchAll(PDO::FETCH_ASSOC);

        $data_bank = null;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }


    $search = "SELECT * FROM cbm_project WHERE  preis <= $budget && age <= $age ORDER BY RAND()
LIMIT 1";

    try {
        $data_bank = new PDO(
            "mysql:dbname=test;host=localhost",
            "root",       // username 
            ""           // password
        );

        // echo "gut";



        $result = $data_bank->query($search);
        $antwort = $result->fetchAll(PDO::FETCH_ASSOC);

        $data_bank = null;  // macht variabel frei


        foreach ($antwort as $line) {



            // echo "The Name: "  . $line["name"] . "<br>";
            // echo "Describtion: "  . $line["describe"] . "<br>";
            // echo "Adress: "  . $line["adress"] . "<br>";
            // echo "Kontakt: "  . $line["kontakt"] . "<br>";


        }
    } catch (PDOException $search) {
        echo $search->getMessage();
    }



//         Email Function!

    // $empfaenger = $_POST["email"];
    // $betreff = "Random place to go in Hamburg";
    // $from = "From: Random Hamburg <absender@domain.de>";
    // $text =   $line["restaurantname"] . "<br>" . $line["beschreibung"] . "<br>" . $line["adress"] . "<br>" . $line["kontakt"] . "<br>";

    // mail($empfaenger, $betreff, $text, $from);
    ?>



    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>



    <footer>
        <h3>All Rights are not Reserved.</h3>
    </footer>

</body>

</html>