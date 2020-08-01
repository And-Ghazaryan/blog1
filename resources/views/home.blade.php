@extends('layouts.layout')

@section('content')
<div class="home-page">
    <div class="cont_info">
        <div class='cont_name'><a href='hotels'>Հյուրանոցներ</a></div>
        @foreach($hotels as $hotel)
        <a href="item/{{ $hotel->id }}">
            <div class="object-home">
                <div class="img-box">
                    <div class="fon"></div>
                    @forelse($hotel->images as $image)
                    <img src="storage/{{ $image->path }}" alt="">
                    @break
                    @empty
                    <div class="default-img">
                    </div>
                    <img src="images/default-img/default.png" alt="">
                    @endforelse
                </div>
                <div class="name-box">
                    <p class='title'>{{ $hotel->title }}</p>
                    <p class='region'><i class="fas fa-map-marker-alt"></i> {{ $hotel->region->name }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="cont_info">
        <div class='cont_name'><a href='restaurants'>Ռեստորաններ</a></div>
        @foreach($restaurants as $restaurant)
        <a href="item/{{ $restaurant->id }}">
            <div class="object-home">
                <div class="img-box">
                    <div class="fon"></div>
                    @forelse($restaurant->images as $image)
                    <img src="storage/{{ $image->path }}" alt="">
                    @break
                    @empty
                    <div class="default-img">
                    </div>
                    <img src="images/default-img/default.png" alt="">
                    @endforelse
                </div>
                <div class="name-box">
                    <p class='title'>{{ $restaurant->title }}</p>
                    <p class='region'><i class="fas fa-map-marker-alt"></i> {{ $restaurant->region->name }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="cont_info">
        <div class='cont_name'><a href='sport-halls'>Մարզասրահներ</a></div>
        @foreach($sportHalls as $sportHall)
        <a href="item/{{ $sportHall->id }}">
            <div class="object-home">
                <div class="img-box">
                    <div class="fon"></div>
                    @forelse($sportHall->images as $image)
                    <img src="storage/{{ $image->path }}" alt="">
                    @break
                    @empty
                    <div class="default-img">
                    </div>
                    <img src="images/default-img/default.png" alt="">
                    @endforelse
                </div>
                <div class="name-box">
                    <p class='title'>{{ $sportHall->title }}</p>
                    <p class='region'><i class="fas fa-map-marker-alt"></i> {{ $sportHall->region->name }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="cont_info">
        <div class='cont_name'><a href='tourism'>Տուրիզմ</a></div>
        @foreach($tourism as $tourism)
        <a href="item/{{ $tourism->id }}">
            <div class="object-home">
                <div class="img-box">
                    <div class="fon"></div>
                    @forelse($tourism->images as $image)
                    <img src="storage/{{ $image->path }}" alt="">
                    @break
                    @empty
                    <div class="default-img">
                    </div>
                    <img src="images/default-img/default.png" alt="">
                    @endforelse
                </div>
                <div class="name-box">
                    <p class='title'>{{ $tourism->title }}</p>
                    <p class='region'><i class="fas fa-map-marker-alt"></i> {{ $tourism->region->name }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection