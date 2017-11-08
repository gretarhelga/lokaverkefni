@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add shoes</div>
                    <div class="panel-body">
                    @include("errors.errors")
                        <form method="post" action="/shoes">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Brand:</label>
                                <input name="brand" type="text"  value="{{ old('brand') }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Size:</label>
                                <input name="size" type="text"  value="{{ old('size') }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Color:</label>
                                <input name="color" type="text"  value="{{ old('color') }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Price:</label>
                                <input name="price" type="text"  value="{{ old('price') }}" class="form-control">
                            </div>

                                <button type="submit" class="btn btn-primary">Add Shoes</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection