<?php
    include("../../config/config.php");
    include("./sua.php");
    // include("./admin/config/config.php");

    $Tendanhmuc =$_POST['Tendanhmuc'];
    $Thutu =$_POST['Thutu'];
    if(isset($_POST['Themdanhmuc'])){
        $sql_them = "INSERT INTO tbl_danhmuc(Tendanhmuc,Thutu) VALUES ('".$Tendanhmuc."', '".$Thutu."')";
        mysqli_query($mysqli, $sql_them);
        header("Location:http://localhost/web_medicine/admin/index.php?action=quanlydanhmucsanpham&query=them");

    }elseif(isset($_POST['Suadanhmuc'])){ 
        $id = $_GET['ID_Danhmuc'];
        $sql_sua = "UPDATE tbl_danhmuc SET Tendanhmuc = '$Tendanhmuc', Thutu =  $Thutu  WHERE ID_Danhmuc = '$id'";
        $reuslt = mysqli_query($mysqli, $sql_sua);
        if($reuslt){
            echo 'Cap Nhat Thanh cong';
        }else{
            echo 'Cap Nhat Không Thanh cong';
        }
      header("Location:http://localhost/web_medicine/admin/index.php?action=quanlydanhmucsanpham&query=them");

    }else{
            $id = $_GET['ID_Danhmuc'];
            $sql_xoa = "DELETE FROM  tbl_danhmuc WHERE ID_Danhmuc ='$id'";
            echo 'xóa';
            mysqli_query($mysqli, $sql_xoa);
             header("Location:http://localhost/web_medicine/admin/index.php?action=quanlydanhmucsanpham&query=them");

    }
        

    

?>