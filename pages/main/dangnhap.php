<?php
    session_start();
    include("./admin/config/config.php");
    // include("../../admin/config/config.php");
    if(isset($_POST['login'])){
        $Username= $_POST['Username'];
        $Password= md5($_POST['Password']);
       
        $sql_admin = mysqli_query($mysqli, "SELECT * FROM tbl_admin WHERE UserName = '".$Username."' AND Password = '".$Password."' ");
        // $query = "INSERT INTO tbl_dangky(Tenkhachhang, Matkhau)VALUES('$Tenkhachhang', '$Matkhau')";
        // $sql_dangky = mysqli_query($mysqli,$query);
        if(mysqli_num_rows($sql_admin) > 0){
            header("Location: http://localhost/web_medicine/index.php?quanly=dangky&id=1");
            // echo 'tim thay du lieu';
           
        }
        else{
            // echo 'Loi dang nhap';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type="text/css">
    table.dangnhap tr td {
    padding: 8px;
    text-align: center;
}
.maincontent {
    
    text-align: center;
    height: 663px;
    color: tomato;
    background: linen;
}

table.table-login {
   
    margin-left: auto;
    margin-right: auto;
}
.wrapper-login {
    padding: 29px;
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
table.dangnhap tr {
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
input[type="login"] {
    padding: 4px;
    width: 94%;
}


    </style>
</head>
<body>
    <div class="wrapper-login">
        <form action="" autocomplete="off" method="POST">
        <table border ="1"class="table-login" style="text-align: center; border-collapse: collapse;">
           
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="Password" name="Password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit"  name="login" value="LOGIN" >
                
            </td>
</tr>
           
        
        </table>
    </div>
</form>


<script>

</script>
</body>
</html>