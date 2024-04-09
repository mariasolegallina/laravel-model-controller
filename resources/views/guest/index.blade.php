@extends('layouts/app')

@section('content')
<section class="movies">
    <div class="container my-3">
        <div class="row row-cols-3 row-gap-3">
            @foreach ($movies as $movie)
            <div class="col d-flex align-items-stretch">
                <div class="card card-body ">
                    <h2 class="fs-4 fw-bold">{{ $movie->title }}</h2>
                    <h2 class="fs-6 fst-italic">{{ $movie->original_title }}</h2>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    </div>
</section>
@endsection