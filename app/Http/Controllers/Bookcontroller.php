<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class Bookcontroller extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function index(Request $request)
    {
        if($request->has('search')){
            $books=Book::where('title','like','%'.$request->search.'%')
            ->orWhere('author','like','%'.$request->search.'%')
            ->paginate(10);
        }
        else{
            $books=Book::paginate(10);
        }
        // dd($books);
        return view('books.index')->with('books', $books);
    }
    public function show($book_id)
    {
        //echo $book_id;
        $book=Book::find($book_id);
       return view('books.show')->with('book', $book);
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
            'price'=>'required|numeric',
            'inStock'=>'required|numeric|Integer',
        ];
        $this->validate($request,$rules);

        $book=new Book();
        $book->Title=$request->title;
        $book->Author=$request->author;
        $book->Price=$request->price;
        $book->InStock=$request->inStock;
        $book->save();
        return redirect()->route('books.show',$book->BookID);
    }

    public function edit($book_id)
    {
        $book=Book::find($book_id);
        return view('books.edit')->with('book', $book);
        //echo $book_id;
    }
    public function update(Request $request)
    {
        $rules=[
            'title'=>'required|max:255',
            'author'=>'required|max:255',
            'price'=>'required|numeric',
            'inStock'=>'required|numeric|Integer',
        ];
        $this->validate($request,$rules);

        $book=Book::find($request->id);
        $book->Title=$request->title;
        $book->Author=$request->author;
        $book->Price=$request->price;
        $book->InStock=$request->inStock;
        $book->save();
        return redirect()->route('books.show',$book->BookID);
    }
    public function destroy(Request $request)
    {
        $book=Book::find($request->id);
        $book->delete();
        return redirect()->route('books.index');
        //dd($request->all());
    }
}
