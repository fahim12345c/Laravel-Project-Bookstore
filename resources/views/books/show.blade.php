@extends('layout')
@section('content')
<h1>Bookstore</h1>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <td>{{ $book->BookID }}</td>
        </tr>
        <tr>
            <th>Title</Title></th>
            <td>{{ $book->Title }}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{ $book->Author }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $book->Price }}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{ $book->InStock }}</td>
        </tr>

    </table>
    <p><a class="btn btn-success" href="{{route('books.index')}}"><i class="bi bi-arrow-left-circle"></i> Go Back</a>
        <a class="btn btn-danger" href="{{route('books.edit',$book->BookID)}}"><i class="bi bi-arrow-left-circle"></i> Edit </a>
    </p>
@endsection