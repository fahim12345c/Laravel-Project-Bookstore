 @extends('layout')
    @section('content')
    <h1>Bookstore</h1>
    <div class="row">
        <div class="col-lg-10">
            <form method="get" action="{{route('books.index')}}">
                <div class="form-row">
                    <div class="col-lg-8">
                        <input type="text" id="search" name="search" class="form-control" placeholder="Search..." value="{{request('search')}}">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-default">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-2">
            <p class="text-right"><a  href="{{route('books.create')}}" class="btn btn-primary"> New Book</a></p>
        </div>
    </div>

    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th colspan="2">Actions</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->BookID }}</td>
            <td>{{ $book->Title}}</td>
            <td>{{ $book->Author }}</td>
            <td>{{ $book->Price }}</td>
            <td><a href="{{route('books.show',$book->BookID)}}">View</a></td>
            <td><a href="{{route('books.edit',$book->BookID)}}">Edit</a></td>
            <td>
                <form action="{{route('books.destroy',$book->BookID)}}" method="post" onsubmit="return confirm('Sure?')">
                    @csrf
                    <input type="hidden" name="id" value="{{$book->BookID}}">
                    <input type="submit" style="padding: 0; margin 0" value="delet" class="btn btn-link text-danger">

                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $books->links()}}
    @endsection
