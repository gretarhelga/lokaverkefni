@extends('layouts.app')

@section('content')

    @foreach($shoes->chunk(4) as $chunk)
        <div class="container">
            <article>
                <div class="row">
                    @foreach($chunk as $shoe)
                    <a href="/shoes/{{ $shoe->id }}" style="color: black;">
                        <div class="col-xs-3" style="border: 1px solid black;">
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