@extends('layouts.app')

@section('content')


    <h1 class="userName">{{ $user->name }}</h1>

    @foreach($shoes->chunk(4) as $chunk)
        <div class="container">
            <article>
                <div class="row">
                    @foreach($chunk as $shoe)
                    <a href="/shoes/{{ $shoe->id }}" style="color: black;">
                        <div class="col-xs-3">
                            <img src="https://cdn.pixabay.com/photo/2013/07/12/18/20/chucks-153310_960_720.png" style="width: 100%;" >


                            <div class="efni">
                                <div style="float:right;">{{ $shoe->size }}</div>
                                <div style="font-weight: bold;">{{ $shoe->brand }}</div>
                                <div>{{ $shoe->color }}</div>
                                <div style="font-weight: bold;">{{ $shoe->price }} ISK</div>
                            </div>


                        </div>
                    </a>
                    @endforeach
                </div>
            </article>
            <hr>
        </div>
    @endforeach

@endsection