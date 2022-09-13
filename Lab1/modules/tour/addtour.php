<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $intro = $_POST['intro'];
        $des = $_POST['description'];
        $nd = $_POST['number_date'];
        $price = $_POST['price'];
        $ctid = $_POST['category_id'];

        $image = 'no_image.png';
        if ($_FILES['image']['size'] > 0){
            $image = $_FILES['image']['name'];
        }
        $img = ['jpg', 'png'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);

        if ($_FILES['image']['size'] > 2000000){
            $err = "Ảnh phải nhỏ hơn 2Mb";
        } 
        if (!in_array($ext, $img)) {
            $err = "Ảnh phải là JPG hoặc PNG";
        }
        if ($nd <= 0){
            $err = "Số ngày phải là số dương";
        } 
        if ($price <= 0){
            $err = "Đơn giá phải là số dương";
        }

        if (!isset($err)){
            $sql = "INSERT INTO tours(name, image, intro, description, number_date, price, category_id) VALUES ('$name', '$image', '$intro', '$des', '$nd', '$price', '$ctid')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            move_uploaded_file($_FILES['image']['tmp_name'], 'C:/xampp/htdocs/PHP2/Lab1/img/' . $image);
            
            header("location:?query=listtour&message=Thêm tour thành công");
            die;
        }
    }

    $sql = "SELECT * FROM categories";
    $cate = getData($sql);
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
        <h2>THÊM TOUR</h2>
        <?php if (isset($err)) : ?>
            <div class="err">
                <p><?= $err ?></p>
            </div>
        <?php endif ?>
        <form action="" method="post" enctype="multipart/form-data">
            <label for=""><b>Tên tour</b></label>
            <br>
            <input type="text" name="name">
            <br>
            <label for=""><b>Ảnh</b></label>
            <br>
            <input type="file" name="image">
            <br>
            <label for=""><b>Giới thiệu</b></label>
            <br>
            <input type="text" name="intro">
            <br>
            <label for=""><b>Mô tả</b></label>
            <br>
            <textarea name="description" id="" cols="100" rows="10"></textarea>
            <br>
            <label for=""><b>Số ngày</b></label>
            <br>
            <input type="number" name="number_date">
            <br>
            <label for=""><b>Đơn giá</b></label>
            <br>
            <input type="number" name="price">
            <br>
            <label for=""><b>Loại tour</b></label>
            <br>
            <select name="category_id" id="">
                <?php foreach ($cate as $ct) : ?>
                    <option value="<?= $ct['id'] ?>"><?= $ct['name'] ?></option>
                <?php endforeach ?>
            </select>
            <br>
            <button type="submit">Thêm</button>
            <a href="?query=listtour" class="a1">Danh sách</a>
        </form>
    </div>
</main>