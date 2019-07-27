<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Mảng là gì? Mảng là kiểu dữ liệu trong php
    lưu trũ được nhiều giá trị
    Trong PHP có 3 kiểu mảng:
    1-Mảng chỉ số
    2-Mảng kết hợp
    3-Mảng đa chiều(mảng lòng mảng)
    Trong mảng 2 khái niệm cần nắm được
    Key : là chỉ số của các phần tử trong mảng
    Value : là giá trị của phần từ trong mảng
    Không echo được mảng
    Phần tử trong mảng bao gồm cả key và value là 1 cặp


    mảng chỉ số là mảng mà có các key là các số
    chú ý mặc định key trong mảng bắt đầu 0
</pre>
<?php
$array1= array("hà nội", "thanh hóa", "nghệ an","hà tĩnh", "hồ chí minh");
echo "<pre>";
print_r($array1);
echo "</pre>";
?>
</body>
</html>