@extends('layouts.layout')

@section('content')
   <div class="wrapper">
    <div class='login-page'>
			<div class='form'>
					 <div class='form-name name2'>
						  <p class='text'>Մուտքագրեք Ձեր էլ. փոստի հասցեն և գաղտնաբառը</p>
					 </div>
					 @if($errors)
					 <div class="errors_message">					  
								@foreach($errors->all() as $error)
									<p>{{ $error }}</p>
								@endforeach							
					 </div>
						@endif
					 <form method='post' action='{{ route('login') }}' >
					 {{ csrf_field() }}
							 <div class='form-name'>
								  <div class='input-box'>
									   <span><i class="fa fa-user" aria-hidden="true"></i></span>
									   <input type='email' class='input' placeholder='Ձեր էլ. փոստի հասցեն' name='email' value='{{ old('email') }}'>
								  </div>
							 </div>
							 <div class='form-name'>
								  <div class='input-box'>
									   <span><i class="fa fa-lock" aria-hidden="true"></i></span>
									   <input type='password' class='input' placeholder='գաղտնաբառ' name='password'>
								  </div>
							 </div>
							 <div class='form-name'>
								  <div class='input-box input-box2'>                                              										  
									   <button type='submit' class='login-btn' name='login-btn'>Մուտք</button>
								  </div>
							 </div>
							 <div class='form-name'>
								  <div class='input-box input-box2'>                                              										  
									   <h4>Դեռ գրանցված չե՞ք
										   <a href='register'>Գրանցվել</a>
									   </h4>
								  </div>
							 </div>
					 </form>
				</div>
	</div>
</div>
@endsection
