
<ul>
  <li>
    <a href = "../product"> 
     <h3>
       Quản lý nhà sản xuất
     </h3>
    </a>
  </li>
</ul>


<ul>
  <li>
    <a href = "../product"> 
     <h3>
       Quản lý sản phẩm 
     </h3>
    </a>
  </li>
</ul>

<?php  
    if ( isset ( $_GET['error'] ) ) {
      ?>
         <span style = 'color : red'>
             <?php echo $_GET['error']  ?>
         </span>
      <?php   
    }
    ?>

    <?php  
    if ( isset ( $_GET['success'] ) ) {
      ?>
         <span style = 'color : green'>
             <?php echo $_GET['success']  ?>
         </span>
      <?php   
    }
    ?>