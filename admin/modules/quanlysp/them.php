
<p>Thêm sản phẩm</p>

<table border="1" width="50%" style="border-collapse: collapse;">
  <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
    <tr>
        <td>Tên danh mục</td>
        <td><input type="text" name="Tensanpham"></td>
    </tr>

    <tr>
        <td>Mã sản phẩm</td>
        <td><input type="text" name="Masanpham"></td>
    </tr>

    <tr>
        <td>Gía sản phẩm</td>
        <td><input type="text" name="Giasanpham"></td>
    </tr>

    <tr>
        <td>Số lượng </td>
        <td><input type="text" name="Soluong"></td>
    </tr>

    <tr>
        <td>Hình ảnh</td>
        <td><input type="text" name="Hinhanh"></td>
    </tr>

    <tr>
        <td> Tóm tắt</td>
        <td><textarea rows="5" name="Tomtat"></td>
    </tr>


    <tr>
        <td>Nội dung</td>
        <td><textarea rows="5" name="Noidung"></td>
    </tr>

    
    <tr>
        <td>Trình trạng</td>
        <td>
          <select>
              <option>Kích hoạt</option>
              <option>Ẩn</option>
          </select>
        </td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="Themsanpham" value="Thêm danh mục sản phẩm"></td>
    </tr>
  </form>

</table>