<?php
    $sql_lietke_sp = "SELECT  * FROM  tbl_sanpham, tbl_danhmuc WHERE  tbl_sanpham.ID_Danhmuc= tbl_danhmuc.ID_Danhmuc  ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>

<p>Liệt kê sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
    <th width="10%">ID</th>
    <th width="10%">Tên sản phẩm</th>
    <th width="10%">Mã sản phẩm</th>
    <th width="10%">Gía sản phẩm</th>
    <th width="10%">Số lượng</th>
    <th width="10%">Danh mục</th>
    <th width="10%">Hình ảnh</th>
    <th width="10%">Nội dung</th>
    <th width="10%">Tình trạng</th>
    <th width="10%">Quản lý</th>

   
  </tr>
<?php
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
        $i++;
?>
  <tr>
    <td> <?php echo $i ?></td>
    <td> <?php echo $row['Tensanpham'] ?></td>
    <td> <?php echo $row['masp'] ?></td>
    <td> <?php echo $row['giasp'] ?></td>
    <td> <?php echo $row['soluong'] ?></td>
    <td> <?php echo $row['Tendanhmuc'] ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="50px"/></td>
    <td> <?php echo $row['noidung'] ?></td>
    <td> <?php echo $row['tinhtrang'] ?></td>

    <td>
        <a href="modules/quanlysp/xuly.php?id_sanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> 
        | <a href="?action=quanlysp&query=sua&id_sanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
    </td>
  </tr>
  <?php
    }
  ?>
  
</table>