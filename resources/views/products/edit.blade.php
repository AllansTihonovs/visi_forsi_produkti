@extends('layouts.app')

@section('content')
    <div class="container">

        @include('layouts.partials.navbar')

        <h1>Edit {{ $product->getName() }}</h1>

        {{ HTML::ul($errors->all()) }}

        {{ Form::model($product, ['route' => ['products.update', $product->getId()], 'method' => 'PUT']) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::text('description', null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}

    </div>
@endsection
