<div class="control-panel-box">
    <div class="control-panel-left-box">
        <a href="MyPage">
            <div class="control-panel-left ll">
                <span class='my_page_span'>
                    <i class="fas fa-bullhorn"></i>
                </span>
                <h5 class='my_page_h5'>Հայտարարություններ</h5>
            </div>
        </a>
        <a href="{{ route('profile') }}">
            <div class="control-panel-left">
                <span class='my_page_span'>
                    <i class="fas fa-cog"></i>
                </span>
                <h5 class='my_page_h5'>Կարգավորումներ</h5>
            </div>
        </a>
        <a href="{{ route('add') }}">
            <div class="control-panel-left">
                <span class='my_page_span'>
                    <i class="fas fa-plus"></i>
                </span>
                <h5 class='my_page_h5'>Ավելացնել հայտարարություն</h5>
            </div>
        </a>
    </div>
    <div class="control-panel-right-box">
        <a href="{{ route('logout') }}">
            <div class="control-panel-right ll">
                <span class='my_page_span'>
                    <i class="fas fa-sign-out-alt"></i>
                </span>
                <h5 class='my_page_h5'>Ելք</h5>
            </div>
        </a>
        <div class="control-panel-right email-span">
            <span class='my_page_span'>
                <i class="fas fa-envelope"></i>
            </span>
            <h5 class='my_page_h5'>{{ Auth::user()->email}}</h5>
        </div>
    </div>
</div>