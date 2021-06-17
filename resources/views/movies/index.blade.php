@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Movies</div>
                <div class="card-body flex row">
                    @foreach ($movies as $movie)
                        <div class="card m-2" style="width: 18rem;">
                            @if($movie->poster && $movie->poster->src !== 'N/A')
                                <img class="card-img-top" src="{{ $movie->poster->src }}" alt="Poster image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <p class="card-text">{{ $movie->year }}</p>
                                <p class="card-text">{{ $movie->type }}</p>
                                <a href="https://imdb.com/title/{{ $movie->imdb }}" class="btn btn-primary" target="_blank">IMDB</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
    </script>
@endpush
