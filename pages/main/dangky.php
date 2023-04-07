<?php
     include("./admin/config/config.php");
    // include("dangnhap.php");
     
    if(isset($_POST['dangky'])){
        $Tenkhachhang= $_POST['hovaten'];
        $Matkhau= md5($_POST['Matkhau']);
       
        $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky (Tenkhachhang, Matkhau)
        VALUES ('".$Tenkhachhang."', '".$Matkhau."')");
        // $query = "INSERT INTO tbl_dangky(Tenkhachhang, Matkhau)VALUES('$Tenkhachhang', '$Matkhau')";
        // $sql_dangky = mysqli_query($mysqli,$query);
        if($sql_dangky) {
            echo 'chúc mừng bạn đã đăng ký thành công';
            header("Location: http://localhost/web_medicine/index.php?quanly=dangnhap&id=1");
        }
    }

?>

<p >Đăng kí thành viên</p>
<style type="text/css">
    table.dangky tr td {
    padding: 8px;
    text-align: center;
}
.maincontent {
    
    text-align: center;
    height: 663px;
    color: tomato;
    background: linen;
}

table.dangkystyle {
    /* text-align: center; */
    margin-left: auto;
    margin-right: auto;
}
.maincontent p {
    text-align: center;
    font-size: 23px;
    font-family: cursive;
    color: tomato;
}
input[type="submit"] {
    background-color: chartreuse;
    font-size: 17px;
    line-height: 36px;
    border: inset;
}
table.dangky tr {
    border-bottom: ridge;
    background: lavenderblush;
    border-radius: 9px;
    box-shadow: goldenrod;
    width: 70%;
    height: 28px;
}
input[type="text"] {
   
    padding: 4px;
    width: 94%;

}
input[type="password"] {
    padding: 4px;
    width: 94%;
}
</style>
<form action="" method="POST">
<table class= "dangkystyle"  border="1" width="60%" style="border-collapse: collapse;">
    <tr>
        <td>Họ và tên</td>
        <td><input type="text" size="50" name="hovaten"></td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td><input type="password" size="50" name="Matkau"></td>
    </tr>
   
    <tr>
            <td colspan="2"><input type="submit"  name="dangky" value="Đăng ký"></td>
        </tr>
</form>
</table>