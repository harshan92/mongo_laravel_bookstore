<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;


class BookController extends Controller
{
    //
    public function create()
    {
        return view('bookcreate');
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->get('title');
        $book->no_of_pages = $request->get('noOfPages');
        $book->no_of_pages = $request->get('noOfPages');
        $book->price = $request->get('price');
        $book->author = $request->get('author');
        $book->publisher = $request->get('publisher');
        $book->description = $request->get('desc');
        $book->save();
        return redirect('book')->with('success', 'Book has been successfully added');
    }

    public function index()
    {
        $books=Book::all();
        return view('bookindex',compact('books'));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('bookedit',compact('book','id'));
    }

    public function update(Request $request, $id)
    {
        $book= Book::find($id);
        $book->title = $request->get('title');
        $book->price = $request->get('price');
        $book->author = $request->get('author');
        $book->no_of_pages = $request->get('no_of_pages');
        $book->description = $request->get('desc');
        $book->save();
        return redirect('book')->with('success', 'Book has been successfully update');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('book')->with('success','Book has been  deleted');
    }
}
