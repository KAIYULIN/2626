@extends('admin.layouts.master')

@section('title', '新增文章')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增產品 <small>請輸入產品內容</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 產品管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
@include('admin.layouts.partials.validation')
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="/admin/products" method="POST" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <label>產品名稱：</label>
                <input name="name" class="form-control" placeholder="請輸入產品名稱">
            </div>
             <div class="form-group">
                <label>產品類別：</label>
                <input name="category" class="form-control" placeholder="請輸入產品類別">
            </div>
             <div class="form-group">
                <label>產品規格：</label>
                <textarea name="specification" class="form-control" rows="10"></textarea>
            </div>
             <div class="form-group">
                <label>產品數量：</label>
                <input name="quantity" class="form-control" placeholder="請輸入產品數量">
            </div>
             <div class="form-group">
                <label>價格：</label>
                <input name="price" class="form-control" placeholder="請輸入價格">
            </div>
            <div class="form-group">
                <label>成本：</label>
                <input name="cost" class="form-control" placeholder="請輸入成本">
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-success">新增</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection
