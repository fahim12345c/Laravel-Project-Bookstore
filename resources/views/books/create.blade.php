@extends('layout')


@section('content')
<h2>New Book</h1>

    <form method="post" action="{{route('books.store')}}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control is-invalid" name="title" value="{{old('title')}}"  placeholder="Enter Title">
          <div>{{$errors->first('title')}}</div>

        <div class="form-group">
            <label for="exampleInputEmail1">Author</label>
            <input type="text" class="form-control is-invalid" name="author"  value="{{old('author')}}" placeholder="Enter Author">
            <div>{{$errors->first('title')}}</div>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" class="form-control is-invalid" name="price" value="{{old('price')}}"  placeholder="Enter Price">
            <div>{{$errors->first('title')}}</div>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">InStock</label>
            <input type="text" class="form-control is-invalid" name="inStock" value="{{old('inStock')}}"  placeholder="Enter InStock">
            <div>{{$errors->first('title')}}</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('books.index')}}" class="btn btn-danger">Back</a>
      </form>

@endsection