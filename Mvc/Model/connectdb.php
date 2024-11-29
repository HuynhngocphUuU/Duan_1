<?php
function connectdb() {
    $host = 'localhost';        
    $dbname = 'duan1';   
    $username = 'root';          
    $password = '';              

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn; 
    } catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
        return null; 
    }
}
?>
