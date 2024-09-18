@extends('layouts.auth')

@section('content')
    <div class="container">
        <h2>Partner Logos</h2>
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <a href="{{ route('insert_partner') }}" class="btn btn-primary mb-3">Add Partner Logo</a>
        <div class="row">
            @foreach ($partners as $partner)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $partner->name }}</h5>
                            @if ($partner->logo)
                                <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}"
                                    class="img-fluid">
                            @else
                                <p>No logo available</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
