@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Shoes</div>

                <div class="panel-body">
                @foreach($shoes as $shoe)
                    <article>
                        <div>
                            <h4>
                                <a href="/threads/{{ $shoe->id }}">{{ $shoe->brand }}</a>
                            </h4>
                        </div>
                    </article>
                    <hr>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection