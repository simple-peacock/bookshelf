<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::where('status','=','borrowed')->get();
        return view('page.book.index',['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'barcode' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        try {

            $book = Book::create($request->all());
            $book->status = 'borrowed';
            $book->borrowed_at = new \DateTime;
            $book->save();

        } catch(\Exception $e) {
            return redirect()->back()->withErrors(['An unknown error has occurred while attempting to save this record']);
        }

        return redirect(action('BookController@index'))->with('success',['The record was successfully saved']);
    }

    /**
     * Return a book
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function returnBook($id)
    {
        $book = Book::find($id);

        if(count($book)==0){
            abort(404);
        }

        try {

            $book->status = 'returned';
            $book->returned_at = new \DateTime;
            $book->save();

        } catch(\Exception $e) {
            return redirect()->back()->withErrors(['An unknown error has occurred while attempting to save this record']);
        }

        return redirect(action('BookController@index'))->with('success',['Thankyou, the book has been returned.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
