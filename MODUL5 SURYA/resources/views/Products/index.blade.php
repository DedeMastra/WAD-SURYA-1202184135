@extends('layout/main')

@section('title', 'Product List')

@section('container')
<div class="container mt-5 w-75" style="background-color:white;">
    <h3 class="pb-3 pt-3 text-center"> Product List </h3>
    <div> 
        <table class="table" style="font-size: small;">
            <thead>
                <tr>
                    <th class="text-center" style="vertical-align:top;" scope="col">
                    No </th>
                    <th class="text-center" style="vertical-align:top;" scope="col">
                    Name </th>
                    <th class="text-center" style="vertical-align:top;" scope="col">
                    Price </th>
                    <th class="text-center" style="vertical-align:top;" scope="col" colspan="2">
                    Actions </th>
                </tr>
            </thead>
            <tbody class="font-weight-light">
                @foreach($products as $product)
                    <tr>
                        <td class="text-center" style="vertical-align:top;" scope="col">
                        {{ $product->id }} </td>
                        <td class="text-center" style="vertical-align:top;" scope="col">
                        {{ $product->name }} </td>
                        <td class="text-center" style="vertical-align:top;" scope="col">
                        {{ $product->price }} </td>
                        <td class="text-center" style="vertical-align:top;" scope="col">
                            <button class="btn btn-sm btn-primary btn-block">
                                <a style="color:white" href="delete.php?ID=<?php echo 'duar' ?>">Edit Data</a>
                            </button>
                        </td>
                        <td class="text-center" style="vertical-align:top;" scope="col">
                            <button class="btn btn-sm btn-primary btn-block">
                                <a style="color:white" href="delete.php?ID=<?php echo 'duar' ?>">Delete Data</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="">
            <button  type="submit" class="btn btn-primary btn-block">
                <a style="color:white" href="/Products/insert">Add Product</a>
            </button>
        </div> 
    </div>
</div>
@endsection