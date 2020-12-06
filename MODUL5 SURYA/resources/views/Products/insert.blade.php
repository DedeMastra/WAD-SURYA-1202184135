@extends('layout/main')

@section('title', 'New Product')

@section('container')
<div class="container mt-5">
    <div class="row align-items-center justify-content-center" style="background-color:#ebeced">
        <div class="col pt-5 pb-5 pr-5 pl-5" style="background-color:white">
            <h3 class="pb-3 text-center"> Add Product </h3>
            <form action="/doProducts" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8">
                        <input name="name" type="text" class="form-control" id="name" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-4 col-form-label">Price</label>
                    <div class="col-sm-8">
                        <input name="price" type="text" class="form-control" id="price" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-4 col-form-label">Description</label>
                    <div class="col-sm-8">
                        <input name="description" type="text" class="form-control" id="description" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stock" class="col-sm-4 col-form-label">Stock</label>
                    <div class="col-sm-8">
                        <input name="stock" type="text" class="form-control" id="stock" value="">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                    <!-- <a style="color:white" href="/doProducts"> </a>-->
                    Add Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection