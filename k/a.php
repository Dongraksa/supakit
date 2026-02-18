<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - งานของศุภกิตติ์</title>
    <style>
        body {
            font-family: 'Tahoma', sans-serif;
            text-align: center;
            padding-top: 50px;
            background-color: #f8f9fa;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            display: inline-block;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        .btn {
            padding: 15px 25px;
            font-size: 16px;
            margin: 10px;
            border: none;
            border-radius: 50px; /* ปรับให้ปุ่มโค้งมนสวยขึ้น */
            cursor: pointer;
            color: white;
            font-weight: bold;
            transition: transform 0.2s, box-shadow 0.2s;
            text-decoration: none;
            display: inline-block;
        }
        .btn:active {
            transform: scale(0.95);
        }
        /* ปุ่มสีเขียว - รูปตัวเอง */
        .btn-green {
            background-color: #28a745;
            box-shadow: 0 4px #1e7e34;
        }
        .btn-green:hover {
            background-color: #218838;
        }
        /* ปุ่มสีส้ม/เหลือง - รูปเพื่อน */
        .btn-orange {
            background-color: #ffc107;
            color: #212529;
            box-shadow: 0 4px #d39e00;
        }
        .btn-orange:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>

    <div class="container">
        <?php
            // ประกาศตัวแปรชื่อและรหัส เพื่อความเป็นระเบียบแบบ PHP
            $student_id = "66010914060";
            $student_name = "ศุภกิตติ์ โสภากุล";
            echo "<h1>งาน k $student_id $student_name</h1>";
        ?>

        <button class="btn btn-green" onclick="viewPhoto('2.jpg')">
            เปิดรูปตัวเอง
        </button>

        <button class="btn btn-orange" onclick="viewPhoto('1.jpg')">
            เปิดรูปเพื่อน
        </button>
    </div>

    <script>
        function viewPhoto(imgName) {
            // สั่งให้เปิดไฟล์รูปภาพในหน้าต่างใหม่
            window.open(imgName, '_blank');
        }
    </script>

</body>
</html>