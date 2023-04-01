
<?php
  
    $ID_Danhmuc = $_GET['ID_Danhmuc'];
    $sql_sua_danhmucsp = "SELECT Tendanhmuc, ID_Danhmuc, Thutu  FROM  tbl_danhmuc WHERE ID_Danhmuc = '$ID_Danhmuc' ORDER BY Thutu LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>


<p>sửa danh mục sản phẩm</p>

<table border="1" width="50%" style="border-collapse: collapse;">
  <form method="POST" action="modules/quanlydanhmucsp/xuly.php?ID_Danhmuc=<?php echo $_GET['ID_Danhmuc']?>">

  <?php
    while($dong = mysqli_fetch_array($query_sua_danhmucsp)){

  ?>

    <tr>
        <td>Tên danh mục</td>
        <td><input type="text" value="<?php echo $dong['Tendanhmuc'] ?>" name="Tendanhmuc"></td>
    </tr>
    <tr>
        <td>Thứ tự</td>
        <td><input type="text" value="<?php echo $dong['Thutu'] ?>"  name="Thutu"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="Suadanhmuc" value="Sửa danh mục sản phẩm"></td>
    </tr>

    <?php
    }
    ?>
  </form>

</table>