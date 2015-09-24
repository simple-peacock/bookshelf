@extends('layouts.main')

@section('title', 'Bookshelf')

@section('content')

    <h3>Currently Borrowed Books</h3>

    @if (count($books)!=0)

        <table>
            <thead>
                <tr>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Borrowed By</th>
                    <th>Borrowed Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ date('d/m/Y', strtotime($book->borrowed_at)) }}</td>
                        <td><a href="{{ action('BookController@returnBook',['id'=>$book->id]) }}" class="button tiny success round">Return Book</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <p>Currently, there are no books borrowed out.</p>
    @endif

@endsection
