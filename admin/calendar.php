<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

// เช็คการเข้าสู่ระบบ
if(empty($_SESSION['id']) && empty($_SESSION['name']) && empty($_SESSION['surname'])) {
    echo '<script>
        alert("คุณไม่มีสิทธิ์ใช้งานหน้านี้");
        window.location = "index.php";
    </script>';
    exit();
}

// รวมไฟล์ที่จำเป็น
include 'header.php'; // รวมส่วนหัว
include 'navbar.php'; // รวมแถบนำทาง

include 'sidebar_menu.php'; // รวมเมนูด้านข้าง
include 'calendar_main.php'; // รวมปฏิทิน
//include 'calendar_form_add.php'; // รวมส่วนท้าย

?>
