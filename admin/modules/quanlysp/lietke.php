<?php
    $sql_lietke_danhmucsp = "SELECT  * FROM  tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>

<p>Liệt kê danh mục sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Tên danh mục</th>
    <th>Quản lý</th>
  </tr>
<?php
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
        $i++;
?>
  <tr>
    <td> <?php echo $i ?></td>
    <td> <?php echo $row['Tendanhmuc'] ?></td>
    <td>
        <a href="modules/quanlydanhmucsp/xuly.php?ID_Danhmuc=<?php echo $row['ID_Danhmuc'] ?>">Xóa</a> 
        | <a href="?action=quanlydanhmucsanpham&query=sua&ID_Danhmuc=<?php echo $row['ID_Danhmuc'] ?>">Sửa</a>
    </td>
  </tr>
  <?php
    }
  ?>
  
</table>