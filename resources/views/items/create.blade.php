@extends('layout')
@section('content')
    <style>
        .uper {
            margin: 40px
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Coffee
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-warning">
                    <ul>
                        @foreach ($errors as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ route('coffee.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Coffee Name</label>
                    <input type="text" class="form-control" name="coffee_name">

                </div>

                <div class="form-group">
                    <label for="description">Coffee Description</label>
                    <input type="text" class="form-control" name="coffee_description">

                </div>

                <div class="form-group">
                    <label for="price">Coffee Price</label>
                    <input type="number" class="form-control" name="coffee_price">

                </div>
                <br>
                <button type="submit" class="btn btn-primary">Add Item</button>
            </form>

        </div>

    </div>
@endsection
