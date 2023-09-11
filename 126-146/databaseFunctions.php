<?php
define("DB_HOST","localhost");
define("DB_NAME", "testdb");
define("DB_USER", "Zach");
define("DB_PASS", "1123");

function connect(){ //connect database
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno())
        die("Connection failed.");
    else
        return $db;
}
function execute($q){ //execute queries into database
    $db =connect();
    $result = mysqli_query($db, $q);
    foreach($result as $data){
        echo "ID is " . $data["id"] . " and Name is " . $data["name"] . ".<br>";
    }
}
function debugger($data){
    echo "<pre>" . print_r($data, true) . "</pre>";
}
function retrieveData($qry){ //retrieving single data
    //$qry = "SELECT * FROM users WHERE id = $id"; 
    $db = connect();
    $result = mysqli_query($db, $qry);
    if(mysqli_num_rows($result) > 0){
        foreach($result as $data){
            echo "ID is " . $data["id"] . "<br>";
            echo "Name is " . $data["name"] . "<br>";
            echo "Email is " . $data["email"] . "<br>";
            echo "Password is " . $data["password"] . "<br>";
        }
    }
}
function insert($qry){ //insert new datas
    $db = connect();
    $result = mysqli_query($db, $qry);
    echo $result > 0 ? "Data inserted successfully." : "Data insertion failed.";
}
function insertUniqueData($name, $email, $pass){ //insert data that are  unique
    $qry = "SELECT * FROM users WHERE name ='$name'";
    $db = connect();
    $r = mysqli_query($db, $qry);
    if(mysqli_num_rows($r) > 0)
        echo "User name is already in use";
    else{
        $qry = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')";
        $result = mysqli_query($db, $qry);
        echo $result > 0 ? "Data inserted successfully." : "Data insertion failed.";
    }
        
}
function insertMultiData($qry){ //insert multiple datas at once
    $db = connect();
    $r = mysqli_multi_query($db, $qry); 
    echo $r > 0 ? "Data inserted successfully." : "Data insertion failed.";

}
function delete($id){ //delete datas
    $qry = "DELETE FROM users WHERE id = $id";
    $db = connect();
    $r = mysqli_multi_query($db, $qry); 
    echo $r > 0 ? "Data deleted successfully." : "Data deletion failed.";
}
function update($type , $new, $id){ //update datas
    $qry = "UPDATE users SET $type = '$new' where id = '$id'";
    $db = connect();
    $r = mysqli_multi_query($db, $qry); 
    echo $r > 0 ? "Data updated successfully." : "Data updating failed.";
}
//debugger(connect());

// $qry = "SELECT * FROM users WHERE name = 'Athu'"; 
// retrieveData($qry);

// $qry = "INSERT INTO users VALUE('','Gayi','gayi69@gmail.com','123','')";
// insert($qry);

//$qry = "SELECT * FROM users";
//execute($qry);

//insertUniqueData("Bye", "byebye@gmail.com", "1111");

// $qry = "INSERT INTO users VALUE(0,'Doku','doku656@gmail.com','656','');";
// $qry .= "INSERT INTO users VALUE(0,'Mala','mala223@gmail.com','223','');";
// $qry .= "INSERT INTO users VALUE(0,'Goi','goi334@gmail.com','334','');";
// insertMultiData($qry);

//delete(8);
//$qry = "UPDATE users SET name = 'Pisi' where name = 'Ahsu'";
//update("email", "htuhtu6969@gmail.com", "3");

$q = "SELECT * FROM users ORDER BY id DESC LIMIT 2,3";
execute($q);
?>