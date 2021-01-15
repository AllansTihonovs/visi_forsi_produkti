@extends('layouts.app')

@section('content')
    <div class="container">

    @include('layouts.partials.navbar')

    <h1>Create Product</h1>

    {{ HTML::ul($errors->all()) }}

    {{ Form::open(['url' => 'products']) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', Input::old('description'), ['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Create!', ['class' => 'btn btn-primary']) }}

    {{ Form::close() }}

</div>
@endsection
