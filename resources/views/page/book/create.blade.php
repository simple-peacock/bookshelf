@extends('layouts.main')

@section('title', 'Bookshelf - Borrow a book')

@section('content')

    <h3>Borrow Book</h3>

    <form method="post" action="{{ action('BookController@store') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="row">
            <div class="small-3 columns">
                <label for="title" class="right inline">Book Title: *</label>
            </div>
            <div class="small-9 columns">
                <input type="text" name="title" placeholder="Title" required>
            </div>
        </div>
        <div class="row">
            <div class="small-3 columns">
                <label for="author" class="right inline">Book Author: *</label>
            </div>
            <div class="small-9 columns">
                <input type="text" name="author" placeholder="Author" required>
            </div>
        </div>
        <div class="row">
            <div class="small-3 columns">
                <label for="barcode" class="right inline">Barcode/ISBN: *</label>
            </div>
            <div class="small-9 columns">
                <input type="text" name="barcode" placeholder="Barcode" required>
            </div>
        </div>
        <div class="row">
            <div class="small-3 columns">
                <label for="name" class="right inline">Your Name: *</label>
            </div>
            <div class="small-9 columns">
                <input type="text" name="name" placeholder="Name" required>
            </div>
        </div>
        <div class="row">
            <div class="small-3 columns">
                <label for="email" class="right inline">Your Email: *</label>
            </div>
            <div class="small-9 columns">
                <input type="email" name="email" placeholder="Email" required>
            </div>
        </div>
        <div class="row text-center">
            <button type="submit" class="button radius success">OK</button>
            <a href="{{ URL::previous() }}" class="button alert radius">Cancel</a>
        </div>
    </form>
@endsection
