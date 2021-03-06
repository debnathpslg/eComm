@extends('master');
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('/storage/images/'.$product['gallery'])}}" alt="" class="detail-img">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>{{$product['name']}}</h2>
                <h3>Price : $ {{$product['price']}}</h3>
                <h4>Details : {{$product['description']}}</h4>
                <br><br>
                <button class="btn btn-primary">Add to Cart</button>
                <br><br>
                <button class="btn btn-success">Buy Now</button>
                <br><br>
            </div>
        </div>
    </div>
@endsection