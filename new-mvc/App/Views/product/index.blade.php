<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Danh sách sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Danh sách sản phẩm')
@section('content')

<!-- Với blade -->
<style>
    a{
        text-decoration: none;
    }
    .div-content{
        padding: 10px 5px;
        background-color: white;
    }
    .add{
        float: right;
        margin-bottom: 10px;
    }
    .add i{
        margin-right: 5px;
    }
    .detail{
        color: red;
    }
</style>
<div class="div-content">
    <a class="add" href="them-san-pham"><i class="fa-regular fa-square-plus"></i>Thêm mới</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <td><b>#</b></td>
                <td><b>Name</b></td>
                <td><b>Image</b></td>
                <td><b>Price</b></td>
                <td><b>Status</b></td>
                <td><b>Information</b></td>
                <td><b>Delete</b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$id}}</td>
                <td>{{$name}}</td>
                <td><img src="{{BASE_URL}}public/dist/img/{{$image_url}}" width="100px"></td>
                <td>{{$price}} VNĐ</td>
                <td>{{$status}}</td>
                <td><a class="detail" href="chi-tiet-san-pham">Chi tiết</a></td>
                <td>
                    <a href=""><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
