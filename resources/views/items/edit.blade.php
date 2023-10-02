@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Coffee Edit
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('coffee.update', $items->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Item Name:</label>
                    <input type="text" class="form-control" name="coffee_name" value="{{ $items->coffee_name }}" />
                </div>
                <div class="form-group">
                    <label for="price">Item Description:</label>
                    <input type="text" class="form-control" name="coffee_description" value="{{ $items->coffee_desc }}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Item Price:</label>
                    <input type="number" class="form-control" name="coffee_price" value="{{ $items->coffee_price }}" />
                </div> <br>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
