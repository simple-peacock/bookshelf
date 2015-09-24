<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/foundation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom-styles.css') }}" />
    <script src="{{ asset('js/vendor/modernizr.js') }}"></script>
  </head>
  <body>

  <!--
  <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
  -->

  <header class="header">
    <h1 class="main-header">Bookshelf</h1>
    <ul class="header-subnav">
      <li><a href="{{ action('BookController@index') }}" class="{{ Request::is('book') ? 'is-active' : '' }}">Home</a></li>
      <li><a href="{{ action('BookController@create') }}" class="{{ Request::is('book/create') ? 'is-active' : '' }}">Borrow Book</a></li>
      <li><a href="#">Help</a></li>
    </ul>
  </header>

    <div class="row">
      <div class="medium-12 columns">

        @include('partial.book.messages')

        @yield('content')

      </div>
    </div>

    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/foundation.min.js') }}"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
