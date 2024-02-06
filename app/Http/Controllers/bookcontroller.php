<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class bookcontroller extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $books=Book::where('title','like','%'.$request->search.'%')
            ->orwhere('author','like','%'.$request->search.'%')
            ->paginate(6);

        }
        else
        {
            $books=Book::paginate(6);
        }
       
        return view('books.index')
        ->with('books',$books);

    }
    public function show($book_id)
    {
        $book=Book::find($book_id);
        return view('books.show')
        ->with('book',$book);
    }
    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request)
    {
        $rules=[
            'title'=>'required|max:255',
            'author'=>'required|max:255',
            'isbn'=>'required|numeric|digits:10',
            'stock'=>'required|numeric|integer|min:0',
            'price'=>'required|numeric'

        ];
      $this->validate($request,$rules);

      $book=new Book;
      $book->title=$request->title;
      $book->author=$request->author;
      $book->isbn=$request->isbn;
      $book->price=$request->price;
      $book->stock=$request->stock;
      $book->save();
      return redirect()->route('books.show',$book->id);
        


    }
    public function edit($book_id)
    {
        $book=Book::find($book_id);
        return view('books.edit')->with('book',$book);
    }
    public function update(Request $request)
    {
        $rules=[
            'title'=>'required|max:255',
            'author'=>'required|max:255',
            'isbn'=>'required|numeric|digits:10',
            'stock'=>'required|numeric|integer|min:0',
            'price'=>'required|numeric'

        ];
      $this->validate($request,$rules);

        $book=Book::find($request->id);
        $book->title=$request->title;
        $book->author=$request->author;
        $book->isbn=$request->isbn;
        $book->price=$request->price;
        $book->stock=$request->stock;
        $book->save();
        return redirect()->route('books.show',$book->id);
    }
    public function destroy(Request $request) {
        $book=Book::find($request->id);
        $book->delete();

        return redirect()->route('books.index');
        
    }
}
