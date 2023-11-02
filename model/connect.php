<?php
// include "..config/config.php";
function conectdb(){
    $host = 'localhost'; // Change this to your database host
    $dbname = ''; // Replace with your database name
    $username = 'root'; // Replace with your username
    $password = ''; // Replace with your password
    try {
        // Creating a PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
        // Set PDO in exception mode
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "Connected successfully"; // To confirm the connection
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
function c(){

}

?>