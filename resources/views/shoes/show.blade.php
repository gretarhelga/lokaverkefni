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

    <form method="POST" action="/shoes/{{ $shoe->id }}/like">
      {{ csrf_field() }}

      <button type="submit" class="btn btn-primary">
        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
      </button>
    </form>
    <p>{{ $shoe->likes()->count() }} likes</p>

    @if ($shoe->user->id === Auth::id())

      <form method="POST" action="/shoes/{{ $shoe->id }}">
        {{ csrf_field() }}
        {{ method_field("DELETE") }}

        <button type="submit" class="btn btn-primary">Delete</button>
        
      </form>
    @else

    @endif

    <hr>
    <h4>Seller</h4>
  	<a href="/user/{{ $shoe->user->id }}" style="text-decoration: none;">{{ $shoe->user->name }}</a>

  </div>

</div>

<div class="commentid">
  <div class="row">

    <div class="col-xs-5 col-xs-offset-2">

      @include("errors.errors")
          <form method="post" action="/shoes/{{ $shoe->id }}" role="form">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-xs-8">
                 <div class="form-group">

                <input type="text"  value="{{ old('text') }}" class="form-control" placeholder="Your comment">

              </div>
              </div>
              <div class="col-xs-4">
                <div class="form-group">

                <button type="submit" class="btn btn-primary">Comment</button>

              </div>
              </div>
            </div>
         

              

          </form>
          <hr>

    </div>
  </div>
</div>

<div class="row">

  <div class="col-xs-5 col-xs-offset-2">

    @foreach($shoe->comments as $comment)


      <p><a href="/user/{{ $comment->user->id }}" style="text-decoration: none;">{{ $comment->user->name }}</a>  {{ $comment->created_at->diffForHumans() }}</p>
      <p>{{ $comment->text }}</p>

      <hr>

    @endforeach
  </div>

</div>


@endsection
