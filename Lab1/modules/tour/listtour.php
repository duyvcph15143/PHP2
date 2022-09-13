<?php
    $sql = "SELECT * FROM tours ORDER BY id DESC";
    $tour = getData($sql);
?>
<style>
    *{
        margin: 0;
    }
    main{
        margin-top: 20px;
    }
    tr td{
        text-align: center;
    }
    .a1{
        border: 1px solid black;
        align-items: center;
        display: flex;
        width: 105px;
        padding: 5px;
        margin-bottom: 10px;
    }
</style>
<main>
    <div class="container">
        <a href="?query=addtour" class="a1">
            <i class="fa-solid fa-circle-plus"></i>
            Thêm Tour
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>TÊN TOUR</td>
                    <td>ẢNH</td>
                    <td>Giới thiệu</td>
                    <td>SỐ NGÀY</td>
                    <td>GIÁ</td>
                    <td>ID CATEGORY</td>
                    <td>CHỈNH SỬA</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($tour as $t) : ?>
                <tr>
                    <td><?= $t['id'] ?></td>
                    <td><?= $t['name'] ?></td>
                    <td><img src="./img/<?= $t['image'] ?>" width="100px"></td>
                    <td><?= $t['intro'] ?></td>
                    <td><?= $t['number_date'] ?></td>
                    <td><?= $t['price'] ?> VNĐ</td>
                    <td><?= $t['category_id'] ?></td>
                    <td>
                        <a href="?query=edittour&id=<?= $t['id'] ?>">Sửa</a>
                        <span>/</span>
                        <a onclick="return confirm('Bạn có muốn xóa không?')" href="../lab1/modules/tour/deltour.php?id=<?= $t['id'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>