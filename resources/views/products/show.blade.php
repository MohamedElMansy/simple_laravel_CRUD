@extends('layouts.app')

@section('content')

    <div class="container">
        ID :- {{$product->id}}

        <br>
        <br>

        Name : - {{$product->name}}

        <br>
        <br>

        Category Id :- {{$product->category_id}}
    </div>

@endsection