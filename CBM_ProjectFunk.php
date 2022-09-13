<?php

$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$budget = $_POST["budget"];
$result = 0;






$search = "SELECT * FROM cbm_project WHERE  preis = $budget && age = $age && gesh like '%$gender%' && moder > 0 ORDER BY RAND()
LIMIT 1";

// random_between(1,20)


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





// $test = "CREATE TABLE bestellungen" . 
//              "(id integer unsigned not null auto_increment PRIMARY KEY," . 
//              "artikelnummer integer unsigned not null,". 
//              "kundennummer integer unsigned not null," . 
//              "preis decimal(7,2) unsigned not null," . 
//              "anzahl integer unsigned);";