@foreach($errors->getBags() as $error)
    @foreach($error->all() as $errorMessage)
        <div data-alert class="alert-box alert radius">
            {{ $errorMessage }}
            <a href="#" class="close">&times;</a>
        </div>
    @endforeach
@endforeach

@if(Session::has('success'))
    @foreach(Session::get('success') as $success)
        <div data-alert class="alert-box success radius">
            {{ $success }}
            <a href="#" class="close">&times;</a>
        </div>
    @endforeach
@endif

