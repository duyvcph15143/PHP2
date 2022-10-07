<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Chi tiết sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Chi tiết sản phẩm')
@section('content')

<!-- Với blade -->
<style>
    a{
        text-decoration: none;
    }

    .div-content{
        display: flex;
        padding: 20px 20px;
        background-color: white;
        margin-bottom: 20px;
    }

    .div-infor{
        margin-left: 50px;
    }
    .div-a{
        border: 1px solid black;
        padding: 5px; 
        background-color: white;
    }
    .div-late{
        margin-bottom: 30px;
    }
</style>
<div class="div-content">
    <div>
        <img src="{{BASE_URL}}public/dist/img/{{$image_url}}" width="600px">
    </div>
    <div class="div-infor">
        <h4>{{$name}}</h4>
        <pre></pre>
        <h1>{{$price}} VNĐ</h1>
        <pre></pre>
        <label for="">Category: </label>
        <p>{{$category_id}}</p>
        <label for="">Status</label>
        <p>{{$status}}</p>
    </div>
    
</div>
<div class="div-late">
    <a class="div-a" href="">Edit</a>
    <a class="div-a" href="ds-san-pham">Danh sách</a>
</div>
    
@endsection