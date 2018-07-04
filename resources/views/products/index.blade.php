@extends("layouts.app")
@section("content")
<table>
    <thead>

    </thead>



    <table class="table table-bordered table-dark">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>quantity</th>
            <th>cat_id</th>
            <th>added at</th>
            <th>updated at</th>
            <th>image</th>
            <th>Delete</th>
            <th> View </th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
            @foreach($prodcut as $pro)
                <tr>
                    <td>{{$pro->id}}</td>
                    <td>{{$pro->name}}</td>
                    <<td>{{$pro->price}}</td>
                    <td>{{$pro->quantity}}</td>
                    <td>{{$pro->category_id}}</td>
                    <td>{{$pro->created_at}}</td>
                    <td>{{$pro->updated_at}}</td>
                    <td><img hight="50" width="50" src="{{Storage::url($pro->image)}}"></td>
                    <td>
                    <form action="/products/{{$pro->id}}" method="post">
                        @csrf
                        @method('DELETE')

                        <input type="submit" class="btn btn-danger" value="Delete">


                    </form>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="/products/{{$pro->id}}"> View </a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="/products/edit/{{$pro->id}}"> Edit </a>
                    </td>



                </tr>
            @endforeach
        </tbody>
    </table>


</table>
@endsection