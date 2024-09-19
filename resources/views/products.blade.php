@extends('layout')
@section('content')
<div class="row" style="width:96%; margin-left:2%; margin-top:5%">
    @foreach($products as $product)
        <div class="container col-xs-12 col-sm-6 col-md-3" style="width:100%;">

            <div class="thumbnail">

                <img src="{{ $product->image }}" alt="" style="width:80%; height:250px">

                <div class="caption">

                    <h4>{{ $product->name }}</h4>

                    <p>{{ $product->description }}</p>

                    <p><strong>Price: </strong> {{ $product->price }}$</p>

                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>

                </div>

            </div>

        </div>

    @endforeach

</div>