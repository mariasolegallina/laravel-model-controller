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
            <!-- <div class="col-3">
                <span>questo è un film</span>
            </div>
            <div class="col-3">
                <span>questo è un film</span>
            </div>
            <div class="col-3">
                <span>questo è un film</span>
            </div>
            <div class="col-3">
                <span>questo è un film</span> -->
        </div>
    </div>
    </div>
</section>
@endsection