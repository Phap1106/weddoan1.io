<?php

if (empty($_POST['name']) || empty($_POST['description'])  || empty($_POST['images']) ||  empty($_POST['price']) || empty($_POST['status'])) {
  header('location:form_insert.php?error=Phải điền đủ thông tin');
 }
$id_producer = $_POST['id_producer'];
$id_category = $_POST['id_category'];
$name = $_POST['name'];
$description = $_POST['description'];
$images = $_POST['images'];
$price = $_POST['price'];
$status = $_POST['status'];

require '../connect.php ';
if ($connect->connect_error) {
  echo "d";
  die("Connection failed: " . $connect->connect_error);
}
$sql = "insert into product(id_producer,id_category,name,description,images,price,status)
values('$id_producer','$id_category','$name','$description','$images','$price','$status')";

mysqli_query($connect, $sql);


mysqli_close($connect);

header('location:index.php?success= Thêm thành công');