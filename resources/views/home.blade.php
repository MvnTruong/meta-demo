@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Matrices</div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary api-query" data-search-query="Matrix">Matrix</button>
                    <button type="button" class="btn btn-primary api-query" data-search-query="Matrix Reloaded">Reloaded</button>
                    <button type="button" class="btn btn-primary api-query" data-search-query="Matrix Revolutions">Revolutions</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center" id="search-results" style="display: none">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Search Results</div>
                <div class="card-body flex row" id="search-results-body">
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
