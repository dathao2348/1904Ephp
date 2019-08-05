<?php
$servername="localhost";
$username="root";
$password="";

//tạo 1 kết nói đến mysql
$connection=new mysqli($servername,$username,$password);
if($connection->connect_error){
    die("Không thể kết nối đến csdl");
}
echo "Kết nối csdl thành công";