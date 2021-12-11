@extends('master');
@section('container')
    <div class="custom-product">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @php ($i=0)
                @foreach ($products as $item)
                    <li data-target="#myCarousel" data-slide-to="{{$i}}" class="{{($i==0)? 'active' : ''}}"></li>
                    {{-- <li data-target="#myCarousel" data-slide-to="1"></li> --}}
                    @php ($i++)
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @php ($i=0)
                @foreach ($products as $item)
                <div class="item {{($i == 0) ? 'active' : ''}}">
                    <img src="{{asset('/storage/images/'.$item['gallery'])}}" alt="{{$item['name']}}" class="slider-img">
                    <div class="carousel-caption slider-text">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                </div>
                @php ($i++)
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="trending-wrapper">
            <h3>Trending Wrapper</h3>
            @php ($i=0)
            @foreach ($products as $item)
            <div class="trending-item">
                <img src="{{asset('/storage/images/'.$item['gallery'])}}" alt="{{$item['name']}}" class="trending-image">
                <div class="">
                    <h3>{{$item['name']}}</h3>
                </div>
            </div>
            @php ($i++)
            @endforeach
        </div>
    </div>
@endsection