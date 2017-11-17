@extends('layouts.app')

@section('content')



<div class="row">
  <div class="col-xs-5 col-xs-offset-2" style="border: 1px solid black;">
  	<img src="https://cdn.pixabay.com/photo/2013/07/12/18/20/chucks-153310_960_720.png" style="width: 100%;">
  </div>

  <div class="col-xs-3" style="border: 1px solid black;">
  	<h2>{{ $shoes->brand }}</h2>
  	<h4>Size: {{ $shoes->size }}</h4>
  	<h4>{{ $shoes->price }} ISK</h4>
  </div>
</div>


@endsection