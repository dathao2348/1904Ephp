<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
   Mảng kết hợp là mảng mà key là 1 chuỗi và số hoặc chuỗi
</pre>

<?php
$array2 = array();
$array2["hn"] = "hà nội";
$array2["th"] = "thanh hoá";
$array2["na"] = "nghệ an";
$array2["ht"] = "hà tĩnh";
$array2["hc"] = "hồ chí minh";
$array2[12] = "long an";
echo "<pre>";
print_r($array2);
echo "</pre>";
foreach ($array2 as $value) {
    echo "<br>" . $value;
}
foreach ($array2 as $key => $value) {
    echo "<br>" . $key . " - " . $value;
}
// cú pháp ít dùng
foreach ($array2 as $key => $value) {
    echo "<br>" . $key . " - " . $array2[$key];
}
?>

</body>
</html>