<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php  
    include'../menu.php';
    ?>

  <form action="process_insert.php"  method="post">
  Hãng sản xuất
    <select name="id_producer">
      <option value="1">Gucchi</option>
      <option value="2">Dior</option>
      <option value="3">Chanel</option>
      <option value="4">Miomio</option>
      <option value="5">Nous</option>
      <option value="6">Hermès</option>
      <option value="7">Louis Vuitton</option>
      <option value="8">Prada</option>
      <option value="9">Burberry</option>
      <option value="10">Dolce & Gabbana</option>
      <option value="11">Ralph Lauren</option>
      <option value="12">Versace</option>
    </select>
    <br> <br>
Thể loại
  <select name="id_category">
    <option value="1">Áo khoác</option>
    <option value="2">Áo phông</option>
    <option value="3">Áo len</option>
    <option value="4">Quần vải</option>
    <option value="5">Quần bò</option>
    <option value="6">Đồ thể thao</option>
    <option value="7">Quần đùi ngắn</option>
    <option value="8">Đồ lót nam</option>
    <option value="9">Đồ lót nữ</option>
    <option value="10">Váy dài</option>
    <option value="11">Váy ngắn</option>
  </select>
    <br> <br>
    Tên
    <input type="text" name ="name">

    <br> <br>
    Nội dung
    <input type="text" name ="description">
   <br> <br>
Ảnh
<input type="text" name="images">
<br> <br>
Giá
<input type="text"name ="price">
<br> <br>
Tình trạng
<select name ="status">
  <option value="1">Còn hàng </option>
  <option value="2">Hết hàng </option>
</select>
<br> <br>
<button>Thêm</button>

  </form>
</body>
</html>