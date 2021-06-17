@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Posters</div>
                    <div class="card-body flex row">
                        @foreach ($posters as $poster)
                            @if($poster->src !== 'N/A')
                                <div class="card m-2" style="width: 18rem;">
                                    <img class="card-img-top" src="{{ $poster->src }}" alt="Poster image">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
