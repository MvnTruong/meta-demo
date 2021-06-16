@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Matrices</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button type="button" class="btn btn-primary">Matrix</button>
                    <button type="button" class="btn btn-primary">Reloaded</button>
                    <button type="button" class="btn btn-primary">Revolutions</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush
