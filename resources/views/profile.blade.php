@extends('layouts.layout')
@section('navbar')
<div class="menu">
    <div class="menu-box">
        <ul class='left-ul'>
            <li class="left-li-logo">
                <a href="/">
                    <div class='logo-box'>ARM INFO.am</div>
                </a>
            </li>
        </ul>
        <ul class='right-ul'>
            <li class="right-li">
                <a href="{{ route('login') }}">
                    <p>{{ Auth::user()->email }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection
@section('content')
<div class="profile">
    <div class="item-profile">
        <div class="item-text">
            <div class="item-title">
                <h3>Փոխել գաղտնապառը</h3>
            </div>
            <div class="item-title-text">
                <p>Դուք կարող եք փոխել ձեր գաղտնաբառը, մուտքագրելով հին գաղտնաբառը, այնուհետ մուտքագրելով եւ հաստատելով
                    նոր գաղտնաբառը:</p>
            </div>
        </div>
        <div class="item-button">
            <button class='edit-password'>Փոխել</button>
        </div>
    </div>
    <div class="item-profile">
        <div class="item-text">
            <div class="item-title">
                <h3>Հեռացնել Profile</h3>
            </div>
            <div class="item-title-text">
                <p>Ձեր հայտարարությունները եւ այլ տեղեկությունները կհեռացվեն</p>
            </div>
        </div>
        <div class="item-button">
            <button class='delete-profile'>Հաստատել</button>
        </div>
    </div>

    <div class="modal-box" id="modal-box"></div>
    <div class="modal modal-password" id="aa" class='modal'>
        <div class='modal-header'>
            <div class='modal-header-l'>
                <p>Փոխել գաղտնաբառը</p>
            </div>
            <div class="modal-header-r" id='close'>
                <i class="fas fa-times close"></i>
            </div>
        </div>
        <div class="modal-content password-content">
            <div class="password-box">
                <div class="password-title">
                    <p>Ընթացիկ գաղտնաբառ</p>
                </div>
                <div class="password-input">
                    <input type="password" id='old_password'>
                </div>
            </div>
            <div class="password-box">
                <div class="password-title">
                    <p>Նոր գաղտնաբառը</p>
                </div>
                <div class="password-input">
                    <input type="password" id='newPassword'>
                </div>
            </div>
            <div class="password-box">
                <div class="password-title">
                    <p>Կրկնեք գաղտնաբառը</p>
                </div>
                <div class="password-input">
                    <input type="password" id='newPassword2'>
                </div>
            </div>
        </div>
        <div class="btn-box">
            <button class='update_password'>Փոխել</button>
        </div>
    </div>

    <div class="mec"></div>
    <div class="profile-delete-modal">
        <div class='modal-header'>
            <div class='modal-header-l'>
                <p>Հեռացնել էջը</p>
            </div>
            <div class="modal-header-r" id='close'>
                <i class="fas fa-times close"></i>
            </div>
        </div>
        <div class="profile-delete-content">
            <p>Ձեր հայտարարությունները եւ այլ տեղեկությունները կհեռացվեն</p>
        </div>
        <div class="profile-delete-button-box">
            <a href='delete_profile/{{ Auth::user()->id }}' class="profile-delete">Հեռացնել</a>
        </div>
    </div>
</div>
@endsection