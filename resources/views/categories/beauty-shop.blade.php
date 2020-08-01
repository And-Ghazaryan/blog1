@extends('layouts.layout')
@section('content')
<div class="categories-page">
    <div class="cont_info">
        <div class='cont_name'><a href='beauty-shop'>Գեղեցկության սրահներ</a></div>
        @foreach($beautyShops as $beautyshop)
        <a href="item/{{ $beautyshop->id }}">
            <div class="object-home">
                <div class="img-box">
                    <div class="fon"></div>
                    @forelse($beautyshop->images as $image)
                    <img src="storage/{{ $image->path }}" alt="">
                    @break
                    @empty
                    <div class="default-img">
                    </div>
                    <img src="images/default-img/default.png" alt="">
                    @endforelse
                </div>
                <div class="name-box">
                    <p class='title'>{{ $beautyshop->title }}</p>
                    <p class='region'><i class="fas fa-map-marker-alt"></i> {{ $beautyshop->region->name }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="paginate">
        <div class="pagination-box">
            {{ $beautyShops->links() }}
        </div>
    </div>
</div>
@endsection