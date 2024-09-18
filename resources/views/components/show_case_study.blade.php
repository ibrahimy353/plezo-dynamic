@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mb-4">
                    <img src="{{ asset('storage/' . $caseStudy->image) }}" class="card-img-top" alt="{{ $caseStudy->title }}">
                    <div class="card-body">
                        <h5 class="card-title mb-3">{{ $caseStudy->title }}</h5>
                        <p class="card-text">{{ $caseStudy->description }}</p>
                    </div>
                </div>
                <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Back to Home</a>
            </div>
        </div>
    </div>
@endsection
