<?php
    include("../../config/config.php");
    include("./sua.php");
    // include("./admin/config/config.php");

    $Tensanpham =$_POST['Tensanpham'];
    $masp =$_POST['masp'];
    $giasp =$_POST['giasp'];
    $soluong =$_POST['soluong'];
    $noidung =$_POST['noidung'];
    $tinhtrang =$_POST['tinhtrang'];
    //xu ly hinh anh
    $hinhanh =$_FILES['hinhanh']['name'];
    $hinhanh_tmp =$_FILES['hinhanh']['tmp_name'];
    $danhmuc =$_POST['danhmuc'];
    
    if(isset($_POST['Themsanpham'])){
        
        $sql_them = "INSERT INTO tbl_sanpham(Tensanpham,masp, giasp, soluong,  hinhanh, noidung,tinhtrang, ID_Danhmuc) VALUES ('".$Tensanpham."', '".$masp."',  '".$giasp."', '".$soluong."','".$hinhanh."', '".$noidung."', '".$tinhtrang."', '".$danhmuc."')";
        mysqli_query($mysqli, $sql_them);
        move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
        echo 'them thanh cong';
        header("Location:http://localhost/web_medicine/admin/index.php?action=quanlysp&query=them");    

    }elseif(isset($_POST['Suasanpham'])){ 
        $id = $_GET['id_sanpham'];
        move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
        $sql_sua = "UPDATE tbl_sanpham SET Tensanpham = '$Tensanpham', masp =  '$masp',   giasp= '$giasp', soluong ='$soluong', hinhanh ='$hinhanh', noidung ='$noidung', tinhtrang= '$tinhtrang' WHERE id_sanpham = '$id'";
        $reuslt = mysqli_query($mysqli, $sql_sua);
        
        // if($reuslt){
        //     echo 'Cap Nhat Thanh cong';
        // }else{
        //     echo 'Cap Nhat Không Thanh cong';
        // }
      header("Location:http://localhost/web_medicine/admin/index.php?action=quanlysp&query=them");

    }else{
            $id = $_GET['id_sanpham'];
            $sql ="SELECT * FROM  tbl_sanpham WHERE  id_sanpham = '$id' LIMIT 1";
            $query = mysqli_query($mysqli, $sql);
            while($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            } 
            $sql_xoa = "DELETE FROM  tbl_sanpham WHERE id_sanpham ='$id'";
            echo 'xóa';
            mysqli_query($mysqli, $sql_xoa);
             header("Location:http://localhost/web_medicine/admin/index.php?action=quanlysanpham&query=them");

    }
        

    

?>