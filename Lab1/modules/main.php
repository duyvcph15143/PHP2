<?php
     if (isset($_GET['query'])) {
        $query = $_GET['query'];
    }else {
        $query = '';
    }

    if($query =='listcate'){
        include("modules/cate/listcate.php");
    }elseif($query == 'addcate'){
        include("modules/cate/addcate.php");
    }elseif($query == 'editcate'){
        include("modules/cate/editcate.php");
    }elseif($query == 'listtour'){
        include("modules/tour/listtour.php");
    }elseif($query == 'addtour'){
        include("modules/tour/addtour.php");
    }elseif($query == 'edittour'){
        include("modules/tour/edittour.php");
    }else{
        include ("modules/trangchu/index.php");
    }
?>