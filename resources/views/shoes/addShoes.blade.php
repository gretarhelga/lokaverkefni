@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add shoes</div>
                    <div class="panel-body">
                    {{-- @include("errors.errors") --}}
                        <form method="post" action="/shoes">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Title:</label>
                                <input name="title" type="text"  value="{{ old("title") }}" class="form-control">
                            </div>
                                <button type="submit" class="btn btn-primary">Publish</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection