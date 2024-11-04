<?php
try {
    $serverName = "Badscom\BADSS"; 
    $database = "web";
    
    
    $dsn = "sqlsrv:Server=$serverName;Database=$database";
 
    $conn = new PDO($dsn);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'k';
    
} catch (PDOException $e) {
    echo "Koneksi Gagal.<br />";
    die("Error: " . $e->getMessage());
}
?>