@extends('layouts.layout')
@section('content')
<div class="my_page">
    @include('my_page_menu')
    @forelse($items as $item)
    <div class="aa">
        <div class="ee ee-img">
            @forelse($item->images as $image)
            <img src="../storage/{{ $image->path }}" alt="">
            @break
            @empty
            <img src="../images//default-img/default.png" alt="">
            @endforelse
        </div>
        <div class="ee ee-text">
            <h5>{{ $item->title }}</h5>
            <p class='region'><i class="fas fa-map-marker-alt"></i> {{ $item->region->name }}</p>
        </div>
        <div class="ee ee-right">
            <a href='edit/{{ $item->id }}'>
                <div class='edit'>
                    <i class="fas fa-edit edit-icon"></i>
                </div>
            </a>
            <div class='del' id='{{ $item->id }}'>
                <i class="fas fa-trash-alt delete-icon"></i>
            </div>

        </div>
    </div>
    @empty
    <div class="aa aa-default">
        <p>Դուք չունեք գործող հայտարարություն</p>
    </div>
    @endforelse
    <div class="modal-box" id="modal-box"></div>
    <div class="modal" id="aa" class='modal'>
        <div class='modal-header'>
            <div class='modal-header-l'>
                <p>Հեռացնել հայտարարությունը</p>
            </div>
            <div class="modal-header-r" id='close'>
                <i class="fas fa-times close"></i>
            </div>
        </div>
        <div class="modal-content">
            <div class='l'><i class="fas fa-trash-alt"></i></div>
            <div class='r'>Հայտարարությունը հեռացնելու դեպքում այն այլևս հնարավոր չի լինի վերականգնել</div>
        </div>
        <div class="b">
            <button class='btn-r' id='br'>Ընդհատել</button>
        </div>
    </div>
</div>
@endsection