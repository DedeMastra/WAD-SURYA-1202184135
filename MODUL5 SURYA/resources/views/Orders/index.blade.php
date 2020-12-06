@extends('layout/main')

@section('title', 'Order List')

@section('container')

<div class="row mt-5 align-items-top justify-content-center">

    @foreach($products as $product)
    <div class="col-sm-3">
    <div style="background-color:white;">
            <div style="background-color:#ebeced;">
                <img src=
                "
                https://raw.githubusercontent.com/DedeMastra/WAD-SURYA-1202184135/master/MODUL1%20SURYA/logo-ead.png
                "
                alt="pake si github aja nanti setelah commit" width = "220" height = "100" class="rounded mx-auto d-block pt-3 pb-3">
            </div>
            <div class="mt-3 pl-3 pr-3 pb-4" style="color: black;"> 
                <div>
                    <h6 class=""> {{ $product->name }}  </h6> 
                    <p class="">
                        
                        {{ $product->description }}  
                        
                        <br>
                    </p>
                    <p class="">
                        {{ $product->price }}  <br>
                    </p>                        
                    <div class="">
                        <button type="" class="btn btn-primary btn-block">
                            <a href="/Orders/{{$product->id}}" style="color:white">Order Now</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection