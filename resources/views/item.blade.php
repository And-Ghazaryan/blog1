@extends('layouts.layout')
@section('content')
@foreach($item as $i)
<div class="item_page">
    <div class="item_left">
        <div class="item_header">
            <div class="logo">
                <div class="i">
                    @forelse($i->logo as $logo)
                    <img src="../storage/{{ $logo->path_logo }}" alt="" width='80px'>
                    @empty
                    <img src='../images/default-img/logo.png' width='80px'>
                    @endforelse
                </div>
            </div>
            <div class="item_name_box">
                <p class='item-title'>{{ $i->title}}</p>
                <p class='item-region'><i class="fas fa-map-marker-alt"></i> {{$i->region->name}}</p>
            </div>
        </div>
        <div class="item-content">
            <div class="slider-area">
                <div class='slider-box'>
                    <div class="slider">
                        <ul class='slider-ul'>
                            @forelse($i->images as $image)
                            <li class='li'><img src='../storage/{{ $image->path }}'></li>
                            @empty
                            <li class='li'><img src='../images/default-img/default.png'></li>
                            @endforelse
                        </ul>
                    </div>
                    <button class="prev slider-button"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    <button class="next slider-button"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                </div>
            </div>
            <div class="item-cont">
                <div class='h body'>Հասցե</div>
                <div class="body">
                    {{ $i->address }}
                </div>
            </div>
            <div class="item-cont">
                <div class='h body'>Նկարագիր</div>
                <div class="body">
                    {{ $i->body }}
                </div>
            </div>
            <div class="item-cont">
                <div class='h body'>Կոնտակտային տվյալներ</div>
                <div class="contact-box">
                    <div class="item-contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="item-contact-box">
                        {{ $i->phone1 }}
                    </div>
                </div>
                @if($i->phone2)
                <div class="contact-box">
                    <div class="item-contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="item-contact-box">
                        {{ $i->phone2 }}
                    </div>
                </div>
                @endif
                @if($i->viber)
                <div class="contact-box">
                    <div class="item-contact-icon">
                        <i class="fab fa-viber item-icon"></i>
                    </div>
                    <div class="item-contact-box">
                        {{ $i->viber }}
                    </div>
                </div>
                @endif
                @if($i->facebook_url)
                <div class="contact-box">
                    <div class="item-contact-icon">
                        <i class="fab fa-facebook-f item-icon"></i>
                    </div>
                    <div class="item-contact-box">
                        <a href="{{ $i->facebook_url }}" target='_blank'>{{ $i->facebook_url }}</a>
                    </div>
                </div>
                @endif
                @if($i->site_url)
                <div class="contact-box">
                    <div class="item-contact-icon">
                        <i class="fas fa-globe item-icon"></i>
                    </div>
                    <div class="item-contact-box">
                        <a href="{{ $i->site_url }}" target='_blank'>{{ $i->site_url }}</a>
                    </div>
                </div>
                @endif
            </div>
            @if($i->link1)
            <div class="video-box">
                <iframe src="https://www.youtube.com/embed/{{ $i->link1 }}" width="300" height="200"></iframe>
            </div>
            @endif
        </div>
    </div>
    <div class="item_right-box">
        @endforeach

        @foreach($items as $item)
        <a href="{{ $item->id }}">
            <div class="right-item">
                <div class="item-img-box">
                    @forelse($item->images as $image)
                    <img src="../storage/{{ $image->path }}" alt="">
                    @break
                    @empty
                    <img src="../images/default-img/default.png" alt="">
                    @endforelse
                    <div class="right-name">
                        <p class='title'>{{ $item->title }}</p>
                        <p class='region'><i class="fas fa-map-marker-alt"></i> {{ $item->region->name }}</p>
                    </div>
                </div>
            </div>
        </a>
        @endforeach

    </div>
</div>
@endsection
