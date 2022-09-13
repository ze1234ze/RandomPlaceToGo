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
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>

    <?php

    $a_name = $_POST["a_name"];
    $a_describe = $_POST["a_describe"];
    $a_adress = $_POST["a_adress"];
    $a_kontakt = $_POST["a_kontakt"];
    $a_preis = $_POST["a_preis"];
    $a_age = $_POST["a_age"];
    $a_gesh = $_POST["a_gesh"];

    // $tempdatei = $_FILES['a_bild']['tmp_name'];
    // $a_bild = $_FILES["a_bild"];
    // $bildsize = $_FILES['a_bild']['size'];
    
    // $datei = "uploads/" . $_FILES['a_bild'];
    
    // $uploadOK = true;
    
    // if ($bildsize >= 50000000) {
    //     echo "Bild size ist grosse als erlaubt 50Mb";
    //     $uploadOK = false;
    // }
    
    // elseif (file_exists($datei)) {
    //     echo "Der Name schon exestiert";
    //     $uploadOK = false;
    // }
    // if ($uploadOK == true)


    //
    
        // move_uploaded_file($tempdatei, "uploads/" . $a_bild);
    

        // Upload w3Schools

        
$target_dir = "../uploads/";   //../uploads/
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    ?>

    <h2 class="text3"><?php echo "File is not an image."; ?></h2>
<?php
    
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
    ?>

    <h2 class="text3"><?php echo "Sorry, file already exists."; ?></h2>
<?php
 
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    ?>

    <h2 class="text3"><?php echo "Sorry, your file is too large."; ?></h2>
<?php
  
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    ?>

    <h2 class="text3"><?php echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."; ?></h2>
<?php
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    ?>

    <h2 class="text3"><?php echo "Sorry, your file was not uploaded."; ?></h2>
<?php
  
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    ?>

    <h2 class="text3"><?php echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded."; ?></h2>
<?php
   
    
  } else {
  
    ?>

    <h2 class="text3"><?php echo "Sorry, there was an error uploading your file."; ?></h2>
<?php
  }
}






    $sql = "INSERT INTO cbm_project(restaurantname,beschreibung,adress,kontakt,preis,age,gesh,bild)" .
        "VALUES (:a_name,:a_describe,:a_adress,:a_kontakt,:a_preis,:a_age,:a_gesh,:name)";

    try {
        $a_data_bank = new PDO(
            "mysql:dbname=test;host=localhost",
            "root",
            ""
        );
    ?>

        <h2 class="text3"><?php echo "New restaurant added to database!"; ?></h2>
<?php



        $eingabe = $a_data_bank->prepare($sql);  // wir bereiten den sql befehl vor

        $eingabe->bindParam(':a_name', $a_name); // verbinden wir die parameter
        $eingabe->bindParam(':a_describe', $a_describe);
        $eingabe->bindParam(':a_adress', $a_adress);
        $eingabe->bindParam(':a_kontakt', $a_kontakt);
        $eingabe->bindParam(':a_preis', $a_preis);
        $eingabe->bindParam(':a_age', $a_age);
        $eingabe->bindParam(':a_gesh', $a_gesh);
        $eingabe->bindParam(':name', $target_file);
        $eingabe->execute();



        //$a_result= $a_data_bank->query($a_sql);
        //$a_antwort= $a_result->fetchAll(PDO::FETCH_ASSOC);

        $a_data_bank = null;
    } catch (PDOException $e) {
        echo $e->getMessage();
    } ?>


    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>


    <a href="Add_rest.html">
        <h2>One more!</h2>
    </a>

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









<?php
//     foreach ($antwort as $line){



//         // echo "The Name: "  . $line["name"] . "<br>";
//         // echo "Describtion: "  . $line["describe"] . "<br>";
//         // echo "Adress: "  . $line["adress"] . "<br>";
//         // echo "Kontakt: "  . $line["kontakt"] . "<br>";


//     } 


// }catch(PDOException $search){
//     echo $search->getMessage();
// }


// 

// //  per post kommen die daten
// $artikelnummer = 1002;
// $produktname = "WLAN Stick";
// $preis = 19.99;
// $beschreibung = "Toller Stick";
// $anzahl = 100;

// $sql = "INSERT INTO produkte(artikelnummer,produktname,preis,beschreibung,anzahl)" .
//        "VALUES (:artikelnummer,:produktname,:preis,:beschreibung,:anzahl)";
//        try{

//         $dbh = new PDO(
//             "mysql:dbname=onlineshop; host=localhost", 
//             "root", //user name
//             ""      // password
//         );
//         echo "Verbindung hergestellt";
    
//         $eingabe = $dbh->prepare($sql);  // wir bereiten den sql befehl vor
//         $eingabe->bindParam(':artikelnummer', $artikelnummer); // verbinden wir die parameter
//         $eingabe->bindParam(':produktname', $produktname);
//         $eingabe->bindParam(':preis', $preis);
//         $eingabe->bindParam(':beschreibung', $beschreibung);
//         $eingabe->bindParam(':anzahl', $anzahl);
//         $eingabe->execute();
    
        
//         $dbh = null; // wir geben das pdo objekt wieder frei
    
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
