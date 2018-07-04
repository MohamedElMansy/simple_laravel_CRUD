@extends('layouts.app')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/products" enctype="multipart/form-data">
        @csrf

        Name <input type="text" name="name" value="{{old('name')}}">
        <br><br>
        Category ID <input type="text" name="category_id" value="{{old('category_id')}}">
        <br> <br>
        image <input type="file" name="image">
        <br> <br>
        <input type="submit" value="Create Product">
    </form>

@endsection
