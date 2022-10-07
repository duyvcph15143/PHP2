<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController {
    public function getProducts() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.index';
        // data view cần biến $name và $price
        $data = [
            'id' => 1,
            'name' => 'Set quần áo nữ',
            'price' => 355000,
            'image_url' => '874ec20325154aa794dd0670a7bf24b6.jpg',
            'category_id' => 'Set',
            'status' => 'Còn hàng'
        ];

        return $this->render($viewName, $data);
    }

    public function createProduct() {
        $viewName = 'product.create';
        $data = [];

        return $this->render($viewName, $data);
    }

    public function getProduct() {
        $viewName = 'product.detail';
        $data = [
            'id' => 1,
            'name' => 'Set quần áo nữ',
            'price' => 355000,
            'image_url' => '874ec20325154aa794dd0670a7bf24b6.jpg',
            'category_id' => 'Set',
            'status' => 'Còn hàng'
        ];

        return $this->render($viewName, $data);
    }
}
