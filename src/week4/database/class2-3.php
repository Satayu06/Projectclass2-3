<?php

    include('../config.db.php'); // นำไฟล์ config.db.php มาใช้
    $table = "CREATE TABLE members (
    id int(6) AUTO_INCREMENT COMMENT 'เลขที่',
    id_stu int(6) COMMENT 'รหัสนักเรียน',
    name VARCHAR(100) COMMENT 'ชื่อ-สกุล',
    nname VARCHAR(100) COMMENT 'ชื่อเล่น',
    age VARCHAR(100) COMMENT 'อายุ',
    phone VARCHAR(13) COMMENT 'เบอร์โทรศัพท์',
    address VARCHAR(255) COMMENT 'ที่อยู่',
    status VARCHAR(30) COMMENT 'สถานะ',
    PRIMARY KEY (id)
    )";

    if ($conn->query($table) === TRUE) {
        echo "สร้างตารางฐานข้อมูลสำเร็จ";
    } else {
        echo "ไม่สามารถสร้างตารางฐานข้อมูลได้:". $conn->error;
    }

    $conn->close(); // ปิดการเชื่อมต่อฐานข้อมูล

?>