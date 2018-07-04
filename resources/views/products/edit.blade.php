@extends('layouts.app')


@section('content')


    <form method="post" action="/products/update">
        {{csrf_field()}}
        @foreach($products as $product)
            <label> name </label><br>
            <input value="{{$product->name}}" name="name"><br>
            <label>cat id </label><br>
            <input  value="{{$product->category_id}}" name="category_id"><br>
            <input  type="hidden" name="id" value="{{$product->id}}">
            <input type="submit" value="add">

        @endforeach




    </form>


@endsection
