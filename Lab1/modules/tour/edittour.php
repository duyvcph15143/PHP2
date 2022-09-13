<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $intro = $_POST['intro'];
        $des = $_POST['description'];
        $nd = $_POST['number_date'];
        $price = $_POST['price'];
        $ctid = $_POST['category_id'];

        if ($nd <= 0){
            $err = "Số ngày phải là số dương";
        } 
        if ($price <= 0){
            $err = "Đơn giá phải là số dương";
        }

        if (!isset($err)){
            $sql = "UPDATE tours SET name='$name', intro='$intro', description='$des', number_date='$nd', price='$price', category_id='$ctid' WHERE id=$id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            move_uploaded_file($_FILES['image']['tmp_name'], 'C:/xampp/htdocs/php2/img/' . $image);
            
            header("location:?query=listtour&message=Thêm tour thành công");
            die;
        }
    }

    $sql = "SELECT * FROM categories";
    $cate = getData($sql);

    $id = $_GET['id'];
    $sql = "SELECT * FROM tours WHERE id=$id";
    $tours = getData($sql, false);
?>
<style>
    label{
        margin-top: 10px;
    }
    input{
        width: 750px;
    }
    button{
        margin-top: 20px;
        border: 1px solid black;
        padding: 3.5px;
    }
    h2{
        text-align: center;
    }
    .a1{
        border: 1px solid black;
        padding: 5px;
        color: black;
    }
    .err{
        color: red;
    }
</style>
<main>
    <div class="container">
        <h2>CẬP NHẬT TOUR</h2>
        <?php if (isset($err)) : ?>
            <div class="err">
                <p><?= $err ?></p>
            </div>
        <?php endif ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $tours['id'] ?>">
            <label for=""><b>Tên tour</b></label>
            <br>
            <input type="text" value="<?= $tours['name'] ?>" name="name">
            <br>
            <label for=""><b>Ảnh</b></label>
            <br>
            <img src="./img/<?= $tours['image'] ?>" width="500px">
            <br>
            <label for=""><b>Giới thiệu</b></label>
            <br>
            <input type="text" value="<?= $tours['intro'] ?>" name="intro">
            <br>
            <label for=""><b>Mô tả</b></label>
            <br>
            <textarea name="description" id="" cols="100" rows="10"><?= $tours['description'] ?></textarea>
            <br>
            <label for=""><b>Số ngày</b></label>
            <br>
            <input type="number" value="<?= $tours['number_date'] ?>" name="number_date">
            <br>
            <label for=""><b>Đơn giá</b></label>
            <br>
            <input type="number" value="<?= $tours['price'] ?>" name="price">
            <br>
            <label for=""><b>Loại tour</b></label>
            <br>
            <select name="category_id" id="">
                <?php foreach ($cate as $ct) : ?>
                    <?php if ($ct['id'] == $tours['category_id']) : ?>
                        <option value="<?= $ct['id'] ?>" selected><?= $ct['name'] ?></option>
                    <?php else : ?>
                        <option value="<?= $ct['id'] ?>"><?= $ct['name'] ?></option>
                    <?php endif ?>
                <?php endforeach ?>
            </select>
            <br>
            <button type="submit">Cập nhật</button>
            <a href="?query=listtour" class="a1">Danh sách</a>
        </form>
    </div>
</main>