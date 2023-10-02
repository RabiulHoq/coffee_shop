@extends('layout')
@section('content')
    <style>
        .uper {
            margin: 40px
        }
    </style>
    <div class="uper">
        @if (session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <table class="table table-stripd">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Coffee name</td>
                    <td>Coffee Description</td>
                    <td>Coffee price</td>
                    <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->coffee_name }}</td>
                        <td>{{ $item->coffee_desc }}</td>
                        <td>{{ $item->coffee_price }}</td>
                        <td><a href="{{ route('coffee.edit', $item->id) }}" class="btn btn-outline-primary">Edit</a></td>
                        <td>
                            <form method="post" action="{{ route('coffee.destroy', $item->id) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
