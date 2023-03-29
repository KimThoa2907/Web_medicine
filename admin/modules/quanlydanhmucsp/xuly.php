<?php
    include("../../config/config.php");

    $Tendanhmuc =$_POST['Tendanhmuc'];
    $Thutu =$_POST['Thutu'];
    if(isset($_POST['Themdanhmuc'])){
        $sql_them = "INSERT INTO tbl_danhmuc(Tendanhmuc,Thutu) VALUES ('".$Tendanhmuc."', '".$Thutu."')";
        mysqli_query($mysqli, $sql_them);
        header("Location:http://localhost/web_medicine/admin/index.php?action=quanlydanhmucsanpham");
    }elseif(isset($_POST['suadanhmuc'])){

    }else{
        $ID= $_GET['ID_Danhmuc'];
        $sql_xoa = "DELETE FROM  tbl_danhmuc WHERE ID_Danhmuc='".$ID."'";
        mysqli_query($mysqli, $sql_xoa);
        header("Location:http://localhost/web_medicine/admin/index.php?action=quanlydanhmucsanpham");
    }
?>