@extends('layouts.app')

@section('content')
    <div class="container">

        @include('layouts.partials.navbar')

        <h1>Showing: {{ $product->getName() }}</h1>

        <div class="jumbotron text-center">
            <h2>{{ $product->getName() }}</h2>
            <p>
                <strong>Description:</strong> {{ $product->getDescription() }}<br>
                <strong>Attributes:</strong><br>
                @foreach($product->productAttributes as $attribute)
                    <strong>{{ $attribute->attribute_key }}: </strong>{{ $attribute->attribute_value }}<br>
                @endforeach
            </p>
        </div>

    </div>
@endsection
