@if(Auth::user()->level==1)
	@include('home2')
@elseif(Auth::user()->level=2)
@include('homepage')
	
@else
	@include('maps')
@endif