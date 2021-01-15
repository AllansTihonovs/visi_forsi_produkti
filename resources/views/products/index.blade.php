@extends('layouts.app')

@section('content')
    <div class="container">

        @include('layouts.partials.navbar')

        <h1>All Products</h1>

        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Description</td>
            </tr>
            </thead>
            <tbody>

            @foreach($products as $key => $value)
                <tr>
                    <td>{{ $value->getId() }}</td>
                    <td>{{ $value->getName() }}</td>
                    <td>{{ $value->getDescription() }}</td>

                    <td>
                        <a class="btn btn-small btn-success" href="{{ URL::to('products/' . $value->getId()) }}">Show</a>
                        <a class="btn btn-small btn-info" href="{{ URL::to('products/' . $value->getId() . '/edit') }}">Edit</a>

                        {{ Form::open(['url' => 'products/' . $value->getId(), 'class' => 'pull-right']) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-warning']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
