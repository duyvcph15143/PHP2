<?php 
    $sql = "SELECT * FROM categories ORDER BY id DESC";
    $cate = getData($sql);
?>
<style>
    *{
        margin: 0;
    }
    tr td{
        text-align: center;
    }
    .a1{
        border: 1px solid black;
        align-items: center;
        display: flex;
        width: 140px;
        padding: 5px;
        margin-bottom: 10px;
    }
</style>
<main>
    <div class="container">
        <a href="?query=addcate" class="a1">
            <i class="fa-solid fa-circle-plus"></i>
            Thêm Category
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td scope="col"><b>ID</b></td>
                    <td scope="col"><b>TÊN TOUR</b></td>
                    <td scope="col"><b>CHỈNH SỬA</b></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cate as $ct) : ?>
                    <tr>
                        <td><?= $ct['id'] ?></td>
                        <td><?= $ct['name'] ?></td>
                        <td>
                            <a href="">Sửa</a>
                            <span>/</span>
                            <a href="">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
