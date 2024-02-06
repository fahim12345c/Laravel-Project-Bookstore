@extends('layout')
 @section('page-content')
 <h1>Welcome Bookstore </h1>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td>{{$book->id}}</td>
        </tr>
        <tr>
            <th>TITLE</th>
            <td>{{$book->title}}</td>
        </tr>
        <tr>
            <th>AUTHOR</th>
            <td>{{$book->author}}</td>
        </tr>
        <tr>
            <th>PRICE</th>
            <td>{{$book->price}}</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td>{{$book->isbn}}</td>
        </tr>
        <tr>
            <th>STOCK</th>
            <td>{{$book->stock}}</td>
        </tr>
        <tr>
            <th>CREAT TIME</th>
            <td>{{$book->created_at}}</td>
        </tr>
        <tr>
            <th>UPDATE TIME</th>
            <td>{{$book->updated_at}}</td>
        </tr>
    </table>
    <p>
        <a class="btn btn-success" href="{{route('books.index')}}">GO BACK</a>
    </p>
 @endsection
