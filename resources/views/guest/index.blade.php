@extends('layouts/app')

@section('content')
<section class="movies">
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-3">
                <h2>{{ $movie->title }}</h2>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
@endsection