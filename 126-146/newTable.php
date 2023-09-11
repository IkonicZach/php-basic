<?php
include("functions.php");
define("DB_HOST","localhost");
define("DB_NAME", "newDB");
define("DB_USER", "Zach");
define("DB_PASS", "1123");

/*$q = "CREATE TABLE IF NOT EXISTS users(
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(225) NOT NULL,
    creator INT(10) NOT NULL,
    email VARCHAR(225) NOT NULL,
    password VARCHAR(225) NOT NULL,
    UNIQUE KEY email(email)
    );";*/

/*$q = "CREATE TABLE IF NOT EXISTS subjects(
    id INT(10) NOT NULL AUTO_INCREMENT,
    name VARCHAR(225) NOT NULL,
    PRIMARY KEY id(id)
    );";*/

/*$q = "CREATE TABLE IF NOT EXISTS tutorials(
    id INT(10) NOT NULL AUTO_INCREMENT,
    subjectID INT(3) NOT NULL,
    title VARCHAR(225) NOT NULL,
    created_by INT(10) NOT NULL,
    PRIMARY KEY (id)
    );";*/

// $q = "CREATE TABLE IF NOT EXISTS tuto_views(
//     id INT(10) NOT NULL PRIMARY KEY,
//     static_view INT(10) NOT NULL,
//     unique_view INT(10) NOT NULL
//     );";
    
// $r = mysqli_query(connect(),$q);
// echo $r ? "Table created successfully!" : "Table creation failed!";

$tutos = json_decode(file_get_contents("tuto.json"));
// $qry = "SELECT * FROM subjects";
$db = connect();
// $r = mysqli_query($db, $qry);

// foreach($tutos as $tuto){
//     $q = "SELECT name FROM subjects WHERE id=$tuto->subject_id";
//     $result = mysqli_query($db, $q);
//     $name ="";
//     foreach($result as $row){
//         $name = $row["name"];
//     }

//     $subjectid = $tuto->subject_id;
//     $creator = $tuto->creator_id;

//     for($i = $tuto->start_id; $i<=$tuto->end_id; $i++){
//         $title = $name . "  " . $i;
//         $q = "INSERT INTO tutorials (subjectID, title, created_by) VALUES
//         ($subjectid, '$title', $creator)";
//         mysqli_query($db, $q);
//     }
// }

$q = "SELECT * FROM tutorials";
$r =mysqli_query($db, $q);

foreach($r as $item){
    $id = $item["id"];
    $static_view = mt_rand(100, 1000000);
    $unique_view = mt_rand(10, 10000);

    $q = "INSERT INTO tuto_views VALUES ($id, $static_view,$unique_view)";
    mysqli_query($db ,$q);
}
?>