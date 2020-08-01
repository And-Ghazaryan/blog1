@extends('layouts.layout')
@section('content')
<div class="categories-page">
    <div class="cont_info">
        <div class='cont_name'><a href='cafe'>Սրճարաններ</div>
        @foreach($cafeAll as $cafe)
        <a href="item/{{ $cafe->id }}">
            <div class="object-home">
                <div class="img-box">
                    <div class="fon"></div>
                    @forelse($cafe->images as $image)
                    <img src="storage/{{ $image->path }}" alt="">
                    @break
                    @empty
                    <div class="default-img">
                    </div>
                    <img src="images/default-img/default.png" alt="">
                    @endforelse
                </div>
                <div class="name-box">
                    <p class='title'>{{ $cafe->title }}</p>
                    <p class='region'><i class="fas fa-map-marker-alt"></i> {{ $cafe->region->name }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="paginate">
        <div class="pagination-box">
            {{ $cafeAll->links() }}
        </div>
    </div>
</div>
@endsection