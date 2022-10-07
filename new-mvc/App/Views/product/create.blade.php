<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Thêm sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Thêm sản phẩm')
@section('content')

<!-- Với blade -->
<style>
    a{
        text-decoration: none;
    }

    .div-content{
        padding: 10px 20px;
        background-color: white;
        margin-bottom: 10px;
    }

    form input{
        width: 300px;
    }
    
    form select{
        width: 300px;
    }

    .div-a{
        border: 1px solid black;
        padding: 5px; 
        background-color: white;
    }
</style>
<div class="div-content">
    <form action="" enctype="multipart/form-data">
        <label for="">Name</label>
        <br>
        <input type="text" name="name">
        <pre></pre>
        <label for="">Image</label>
        <br>
        <input type="file" name="image">
        <pre></pre>
        <label for="">Price</label>
        <br>
        <input type="text" name="price">
        <pre></pre>
        <label for="">Categories</label>
        <br>
        <select name="category_id">
            <option value="">Áo</option>
            <option value="">Quần</option>
            <option value="">Giày</option>
            <option value="">Set quần áo</option>
        </select>
        <pre></pre>
        <label for="">Status</label>
        <br>
        <input type="text" name="status ">
        <pre></pre>
        <button type="submit">Add</button>
        <pre></pre>
    </form>
</div>
<a class="div-a" href="ds-san-pham">Danh sách</a>

@endsection