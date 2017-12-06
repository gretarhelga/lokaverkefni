@extends('layouts.app')

@section('content')



<div class="row">
  <div class="col-xs-5 col-xs-offset-2">
  	<img src="https://cdn.pixabay.com/photo/2013/07/12/18/20/chucks-153310_960_720.png" style="width: 100%;">
  </div>


  <div class="col-xs-3">
  	<h2>{{ $shoe->brand }}</h2>
    <h4>Color: {{ $shoe->color }}</h4>
  	<h4>Size: {{ $shoe->size }}</h4>
  	<h4>{{ $shoe->price }} ISK</h4>

<!--     <form method="POST" action="/shoes/{{ $shoe->id }}">
      {{ csrf_field() }}

      <button type="submit" class="btn btn-primary">Like</button>
    </form>
    <p>{{ $shoe->likes()->count() }} likes</p>
 -->
    @if ($shoe->user->id === Auth::id())

      <form method="POST" action="/shoes/{{ $shoe->id }}">
        {{ csrf_field() }}
        {{ method_field("DELETE") }}

        <br>
        <button type="submit" class="btn btn-primary">Delete</button>
        
      </form>
    @else

    @endif

    <hr>
    <h4>Seller</h4>
  	<a href="/user/{{ $shoe->user->id }}" style="text-decoration: none;">{{ $shoe->user->name }}</a>

  </div>

</div>

<div class="row">

  <div class="col-xs-5 col-xs-offset-2">

    @include("errors.errors")
    <div class="panel panel-default">
      <div class="panel-body">
        <form method="post" action="/shoes/{{ $shoe->id }}">
          {{ csrf_field() }}
            <div class="form-group">
              <label>Comment:</label>
              <input name="text" type="text"  value="{{ old('text') }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Comment</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">

  <div class="col-xs-5 col-xs-offset-2">

    @foreach($shoe->comments as $comment)
      <p>{{ $comment->text }}</p>
    @endforeach
  </div>

</div>


@endsection
