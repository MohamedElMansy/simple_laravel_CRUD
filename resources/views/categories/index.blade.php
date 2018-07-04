@extends('layouts.app')

@section('content')

<div class="container"> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>

    </tr>
  </thead>
  <tbody>
  @foreach($categories as $category)

    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      
    </tr>
@endforeach

  </tbody>
</table>



</div>
@endsection