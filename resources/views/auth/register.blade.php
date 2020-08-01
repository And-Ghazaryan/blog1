@extends('layouts.layout')

@section('content')
<form action="{{ route('register') }}" method='post'>
	{{ csrf_field() }}
	<div class="register-page">
		<div class="register-form-box">
			<div class="register-form">
				<div class="register-input-box reg-top">
					<p class='reg'>Գրանցում</p>
				</div>
				@if($errors)
					 <div class="errors_message">					  
								@foreach($errors->all() as $error)
									<p>{{ $error }}</p>
								@endforeach							
					 </div>
						@endif
						<div class="register-input-box">
							<input type='email' placeholder='Ձեր էլ. փոստի հասցեն' class='register-input' name='email' value="{{ old('email') }}">
						</div>
						<div class="register-input-box">
							<input type='password' placeholder='գաղտնաբառ' class='register-input' name='password' value="{{ old('password') }}">
						</div>
						<div class="register-input-box">
							<input type='password' placeholder='կրկնեք գաղտնաբառը' class='register-input' name='password_confirmation' value="{{ old('password_confirmation') }}">
						</div>
						<div class="register-input-box">
							<div class='reg-checkbox'>
								<input type='checkbox' name='check'>
								</div>
								<div class='reg-checkbox'>
									<p>
										<a href="">Ես համաձայն եմ<br>օգտագործման համաձայնագրին:</a>
									</p>
								</div>
						</div>
						<div class="register-input-box">					        
							<button class='register-input register-btn'>Գրանցվել</button>
						</div>
					</div>
				</div>
			</div>
		</form>
@endsection
