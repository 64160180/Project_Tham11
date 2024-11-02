<?php
// การเชื่อมต่อฐานข้อมูล
$host = 'localhost';
$db = 'inventory_db';
$user = 'root'; 
$pass = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 
    $stmt = $pdo->query("SELECT title, start, end FROM tbl_event");
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // ส่งออกในรูปแบบ JSON
    header('Content-Type: application/json');
    echo json_encode($events);

} catch (PDOException $e) {
    echo 'การเชื่อมต่อล้มเหลว: ' . $e->getMessage();
}
?>
