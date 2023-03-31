<?php
    include("../../config/config.php");

    $Tendanhmuc =$_POST['Tendanhmuc'];
    $Thutu =$_POST['Thutu'];
    if(isset($_POST['Themdanhmuc'])){
        $sql_them = "INSERT INTO tbl_danhmuc(Tendanhmuc,Thutu) VALUES ('".$Tendanhmuc."', '".$Thutu."')";
        mysqli_query($mysqli, $sql_them);
        header("Location:http://localhost/web_medicine/admin/index.php?action=quanlydanhmucsanpham&query=them");

    }elseif(isset($_POST['suadanhmuc'])){
        $sql_update = "UPDATE tbl_danhmuc SETC Tendanhmuc='".$Tendanhmuc."', Thutu='".$Thutu."' WHERE IDDanhmuc= $_GET ['ID_Danhmuc']";
        mysqli_query($mysqli, $sql_update);
        header("Location:http://localhost/web_medicine/admin/index.php?action=quanlydanhmucsanpham&query=them");

    }else{
            $ID= $_GET['ID_Danhmuc'];
            $sql_xoa = "DELETE FROM  tbl_danhmuc WHERE IDDanhmuc='".$ID."'";
            mysqli_query($mysqli, $sql_xoa);
            header("Location:http://localhost/web_medicine/admin/index.php?action=quanlydanhmucsanpham&query=them");

    }
        

    

?>