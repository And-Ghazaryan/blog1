<div class="menu">
	<div class="menu-box">			 
		<ul class='left-ul'>
			<li class="left-li left_bars_icon" title='MENU'>
			        <div class="ss top"></div>
					<div class="ss a2"></div>
					<div class="ss a3"></div>
			</li>
			<li class="left-li-logo">
				<a href="/">
					 <div class='logo-box'>YOUR INFO.am</div>
				</a>
			</li>
		</ul>
		</ul>
		@if(Auth::user())
		<ul class='right-ul'>
		<li class="li-search">
			<form action="{{ route('search') }} " method="post">
			{{ csrf_field() }}
				<input type="text" class='search-input' placeholder='որոնել' name='search'>
				<button class='li-search-icon'>					 
					<i class="fas fa-search search-icon"></i>
				</button>
			</form>
			</li>
			<li class="right-li">
				<a href="{{ route('login') }}"><p>{{ Auth::user()->email }}</p></a>	     
			</li>
		</ul>
		@else
		<ul class='right-ul'>
			<li class="li-search">
		     <form action="{{ route('search') }} " method="post">
			 {{ csrf_field() }}
				<input type="text" class='search-input' placeholder='որոնել' name='search'>
				<button class='li-search-icon'>					 
					<i class="fas fa-search search-icon"></i>
				</button>
			</form>
			</li>
			<li class="right-li">
				<a href="{{ route('login') }}"><p>Իմ էջը</p></a>	     
			</li>
			<li class="right-li">
				<a href="{{ route('register') }}"><p>Գրանցվել</p></a>				     
			</li>
		</ul>
		@endif
		@if(Auth::user())
		<a href="login">				
				<div class="right-li-bars">
					{{ Auth::user()->email }}
				</div>
			</div>
		</a>
		@else
		<a href="login">				
				<div class="right-li-bars uu">
						<i class="fas fa-user"></i>
				</div>
			<!-- </div> -->
		</a>
		@endif
	</div>		
	<div class="categories">
		<div class="menuu-box">
		<div class="search-box">
		<div class="li-search li-categories">
		<form action="{{ route('search') }} " method="post">
		{{ csrf_field() }}
				<input type="text" class='search-input search-categories' placeholder='որոնել' name='search'>
				<button class='li-search-icon li-search-icon-categories'>					 
					<i class="fas fa-search search-icon search-icon-caregories"></i>
				</button>
        </form>
			</div>
		</div>
			<div class="m m1">
				<a href='hotels'>
					<div class="c c1">
						<span><img src="{{ asset('images/menu_icons/hotels.png') }}" alt=""></span>
						<p>Հյուրանոցներ</p>
					</div>
				</a>
				<a href='restaurants'>
					<div class="c c2">
						<span><img src="{{ asset('images/menu_icons/resort.png') }}" alt=""></span>
						<p>Ռեստորաններ</p>
					</div>
				</a>
				<a href='kindergartens'>
					<div class="c c3">
						<span><img src="{{ asset('images/menu_icons/baby.png') }}" alt=""></span>
						<p>Մանկապարտեզներ</p>
					</div>
				</a>
				<a href='pools'>
					<div class="c c4">
						<span><img src="{{ asset('images/menu_icons/baseyn.png') }}" alt="" width='100%'></span>
						<p>Լողավազաններ</p>
					</div>
				</a>															
				<a href='sport-halls'>
					<div class="c c5">
						<span><img src="{{ asset('images/menu_icons/fitnes.png') }}" width="100%" alt=""></span>
						<p>Մարզասրահներ</p>
					</div>
				</a>
				<a href='banks'>
					<div class="c c6">
						<span><img src="{{ asset('images/menu_icons/bank.png') }}" width="100'" alt=""></span>
						<p>Բանկեր</p>
					</div>
				</a>
				<a href='clubs'>
					<div class="c c7">
						<span><img src="{{ asset('images/menu_icons/club.png') }}" width="100%" alt=""></span>
						<p>Ակումբներ</p>
					</div>
				</a>
				<a href='beauty-shop'>
					<div class="c c8">
						<span><img src="{{ asset('images/menu_icons/salon.png') }}" width="100%" alt=""></span>
						<p>Գեղեցկության սրահներ</p>
					</div>
				</a>								
				<a href='taxi'> 
					<div class="c c9">
						<span><img src="{{ asset('images/menu_icons/taxi.png') }}" width="100%" alt=""></span>
						<p>Տաքսի</p>
					</div>
				</a>
				<a href='cafe'>
					<div class="c c10">
						<span><img src="{{ asset('images/menu_icons/cofee.png') }}" width="100'" alt=""></span>
						<p>Սրճարաններ</p>
					</div>
				</a>
				<a href='shop'>
					<div class="c c11">
						<span><img src="{{ asset('images/menu_icons/shop.png') }}" width="100%" alt=""></span>
						<p>Խանութներ</p>
					</div>
				</a>
				<a href='bar'>
					<div class="c c12">
						<span><img src="{{ asset('images/menu_icons/bar.png') }}" width="100%" alt=""></span>
						<p>Բարեր</p>
					</div>
				</a>					
				<a href='tourism'>
					<div class="c c13">
						<span><img src="{{ asset('images/menu_icons/tourism.png') }}" width="100%" alt=""></span>
						<p>Տուրիզմ</p>
					</div>
				</a>
				<a href='cinema'>
					<div class="c c14">
						<span><img src="{{ asset('images/menu_icons/kinotatron.png') }}" width="100'" alt=""></span>
						<p>Կինոթատրոններ</p>
					</div>
				</a>
				<a href='pharmacies'>
					<div class="c c15">
						<span><img src="{{ asset('images/menu_icons/doctor.png') }}" width="100%" alt=""></span>
						<p>Դեղատներ</p>
					</div>
				</a>
				<a href='truckingindustry'>
					<div class="c c16">
						<span><img src="{{ asset('images/menu_icons/gruz.png') }}" width="100%" alt=""></span>
						<p>Բեռնափոխադրում</p>
					</div>
				</a>							
			</div>							
		</div>
	</div>
</div>


