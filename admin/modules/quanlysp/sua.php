
<?php
    $id_sanpham = $_GET['id_sanpham'];
    $sql_sua_sp = "SELECT *  FROM  tbl_sanpham WHERE id_sanpham = '$id_sanpham'LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>


<p>sửa sản phẩm</p>

<table border="1" width="50%" style="border-collapse: collapse;">
  <form method="POST" action="modules/quanlysp/xuly.php?id_sanpham=<?php echo $_GET['id_sanpham']?>" enctype="multipart/form-data">
  <?php
    while($dong = mysqli_fetch_array($query_sua_sp)){

  ?>

    <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" value="<?php echo $dong['Tensanpham'] ?>" name="Tensanpham"></td>
    </tr>
    <tr>
        <td>Mã sản phẩm</td>
        <td><input type="text" value="<?php echo $dong['masp'] ?>" name="masp"></td>
    </tr>
    <tr>
        <td>Gía sản phẩm</td>
        <td><input type="text" value="<?php echo $dong['giasp'] ?>" name="giasp"></td>
    </tr>
    <tr>
        <td>Số lượng </td>
        <td><input type="text" value="<?php echo $dong['soluong'] ?>" name="soluong"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td>
            <input type="file" name="hinhanh">
            <img src="modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>" width="50px"/>
        </td>
    </tr>
    <tr>
        <td>Nội dung</td>
        <td><input type="text" value="<?php echo $dong['noidung'] ?>" name="noidung"></td>
    </tr>
    <tr>
        <td>Tình trạng</td>
        <td><input type="text" value="<?php echo $dong['tinhtrang'] ?>" name="tinhtrang"></td>
    </tr>

    <tr>
        <td colspan="2"><input type="submit" name="Suasanpham" value="Sửa sản phẩm"></td>
    </tr>

    <?php
    }
    ?>
  </form>

</table>