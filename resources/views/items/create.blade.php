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

            <form method="POST" action="{{ route(coffee . store) }}">
                @csrf
                <div class="form-group">
                    <label for="name">Item Name</label>
                    <input type="text" class="form-control" name="item_name">

                </div>

                <div class="form-group">
                    <label for="description">Item Description</label>
                    <input type="text" class="form-control" name="item_description">

                </div>

                <div class="form-group">
                    <label for="price">Item Price</label>
                    <input type="number" class="form-control" name="item_price">

                </div>

                <button type="submit" class="btn btn-primary">Add Item</button>
            </form>

        </div>

    </div>
@endsection
