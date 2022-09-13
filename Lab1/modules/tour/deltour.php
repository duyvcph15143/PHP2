<?php
    $conn = mysqli_connect('localhost','root','','ph15143_examphp1');
    
    $id = $_GET['id'];
    $sql = "DELETE FROM tours WHERE id=$id";
    mysqli_query($conn, $sql);
    header("location:../../?query=listtour&message=Xóa thành công");
    die;