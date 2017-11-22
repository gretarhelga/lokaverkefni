@extends('layouts.app')

@section('content')



<div class="row">
  <div class="col-xs-5 col-xs-offset-2" style="border: 1px solid black;">
  	<img src="https://cdn.pixabay.com/photo/2013/07/12/18/20/chucks-153310_960_720.png" style="width: 100%;">
  </div>

  <div class="col-xs-3" style="border: 1px solid black;">
  	<h2>{{ $shoe->brand }}</h2>
  	<h4>Size: {{ $shoe->size }}</h4>
  	<h4>{{ $shoe->price }} ISK</h4>

  	<a href="/user/{{ $shoe->user->id }}" style="text-decoration: none;">{{ $shoe->user->name }}</a>

  	@if ($shoe->user->id === Auth::id())

  		<form method="POST" action="/shoes/{{ $shoe->id }}">
  			{{ csrf_field() }}
  			{{ method_field("DELETE") }}

  			<button type="submit">Delete</button>
        
  		</form>
  	@else

  	@endif




  </div>

</div>


@endsection