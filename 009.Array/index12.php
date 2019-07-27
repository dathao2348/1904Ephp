<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Các hàm xử lý mảng trong PHP
</pre>
<?php
$array1 = array(0, 1, 2);
/*
 * Đếm số phần tử của mảng
 * */
echo "<br> hàm count : " . count($array1);
/*
 * Kiểm tra một biến có phải 1 mảng hay không
 * */
echo "<br> hàm is_array";
var_dump(is_array($array1));
/*
 * Kiểm tra xem 1 mảng có rỗng không
 * empty ($array1) trả về true nếu mảng rỗng và trả về false nếu mảng không rỗng
 * !empty($array1) trả về true nếu mảng có dữ liệu và trả về false nếu mảng có dữ liệu
 *
 * */
echo "<br>";
var_dump(empty($array1));
?>
</body>
</html>