@extends('layouts.layout')
@section('content')
<div class="search-page">
    @if(count($items) > 0)
    @foreach($items as $item)
    <a href="item/{{ $item->id }}">
        <div class="object-home">
            <div class="img-box">
                <div class="fon"></div>
                @forelse($item->images as $image)
                <img src="storage/{{ $image->path }}" alt="">
                @break
                @empty
                <div class="default-img">
                </div>
                <img src="images/default-img/default.png" alt="">
                @endforelse
            </div>
            <div class="name-box">
                <p class='title'>{{ $item->title }}</p>
                <p class='region'><i class="fas fa-map-marker-alt"></i> {{ $item->region->name }}</p>
            </div>
        </div>
    </a>
    @endforeach
    @else
    <h4>Ձեր հարցմանը համապատասխան տեղեկություն չի գտնվել:</h4>
    @endif
</div>

@endsection