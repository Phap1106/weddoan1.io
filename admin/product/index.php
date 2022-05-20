<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>
    Đây là khu vực nhà sản xuất
  </h1>
  <a href="form_insert.php">
    Thêm
  </a>
  <?php
  include '../menu.php';
  ?>
  <?php
  require '../connect.php';
  $sql = "select * from product";
  $result = mysqli_query($connect, $sql);
  ?>
  <table border="1" width="100%">
    <tr>
      <th>Mã</th>
      <th>Tên </th>
      <th>Nội dung </th>
      <th>Ảnh </th>
      <th>Giá </th>
      <th>Tình trạng</th>
      <th>Sửa</th>
      <th>Xóa</th>
    </tr>                
    <?php foreach ($result as $each) : ?>
      <tr>
        <td><?php echo $each['id'] ?></td>
        <td><?php echo $each['name'] ?></td>
        <td><?php echo $each['description'] ?></td> 
        <td>
          <img height="100px" src="<?php echo $each['images'] ?>">
        </td>
        <td><?php echo $each['price'] ?></td>
        <td>
        <td>
          <?php echo $each['status'] ?>
      </td>
          <a href="form_update.php?id=<?php echo $each['id'] ?>">
            Sửa
          </a>
        </td>
        <td>
          <a href="delete.php?id=<?php echo $each['id'] ?>">
            Xóa
          </a>
        </td>
      </tr>
    <?php endforeach  ?>
  </table>
</body>

</html>