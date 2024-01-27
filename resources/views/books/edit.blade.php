@extends('layout')


@section('content')
<h2>Update Book</h1>

    <form method="post" action="{{route('books.update')}}">
        @csrf
        <input type="hidden" name="id" value="{{$book->BookID}}">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control is-invalid" name="title" value="{{old('title',$book->Title)}}"  placeholder="Enter Title">
          <div>{{$errors->first('title')}}</div>

        <div class="form-group">
            <label for="exampleInputEmail1">Author</label>
            <input type="text" class="form-control is-invalid" name="author"  value="{{old('author',$book->Author)}}" placeholder="Enter Author">
            <div>{{$errors->first('title')}}</div>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" class="form-control is-invalid" name="price" value="{{old('price',$book->Price)}}"  placeholder="Enter Price">
            <div>{{$errors->first('title')}}</div>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">InStock</label>
            <input type="text" class="form-control is-invalid" name="inStock" value="{{old('inStock',$book->InStock)}}"  placeholder="Enter InStock">
            <div>{{$errors->first('title')}}</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('books.index')}}" class="btn btn-danger">Back</a>
      </form>

@endsection