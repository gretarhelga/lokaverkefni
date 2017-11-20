@extends('layouts.app')

@section('content')


    <h1>{{ $user->name }}</h1>

    @foreach($shoes->chunk(4) as $chunk)
        <div class="container">
            <article>
                <div class="row">
                    @foreach($chunk as $shoe)
                    <a href="/shoes/{{ $shoe->id }}" style="color: black;">
                        <div class="col-xs-3" style="border: 1px solid black;">
                            <img src="https://cdn.pixabay.com/photo/2013/07/12/18/20/chucks-153310_960_720.png" style="width: 100%;" >
                            <div >{{ $shoe->brand }}</div>
                            <div>{{ $shoe->color }}</div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </article>
            <hr>
        </div>
    @endforeach

@endsection