@extends('layouts.main')

@section('title', 'Bookshelf - Borrow a book')

@section('content')

    <h3>Borrow Book</h3>

    <form method="post" action="{{ action('BookController@store') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="row">
            <div class="row collapse prefix-radius">
                <div class="small-3 columns">
                    <span class="prefix"><strong>Book Title *</strong></span>
                </div>
                <div class="small-9 columns">
                    <input type="text" name="title" placeholder="Title" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row collapse prefix-radius">
                <div class="small-3 columns">
                    <span class="prefix"><strong>Book Author *</strong></span>
                </div>
                <div class="small-9 columns">
                    <input type="text" name="author" placeholder="Author" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row collapse prefix-radius">
                <div class="small-3 columns">
                    <span class="prefix"><strong>Barcode/ISBN *</strong></span>
                </div>
                <div class="small-9 columns">
                    <input type="text" name="barcode" placeholder="Barcode" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row collapse prefix-radius">
                <div class="small-3 columns">
                    <span class="prefix"><strong>Your Name *</strong></span>
                </div>
                <div class="small-9 columns">
                    <input type="text" name="name" placeholder="Name" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row collapse prefix-radius">
                <div class="small-3 columns">
                    <span class="prefix"><strong>Your Email *</strong></span>
                </div>
                <div class="small-9 columns">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <button type="submit" class="button radius success small">OK</button>
            <a href="{{ URL::previous() }}" class="button alert radius small">Cancel</a>
        </div>
    </form>
@endsection
