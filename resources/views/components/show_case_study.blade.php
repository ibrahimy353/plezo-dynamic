@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <!-- Case Study Image -->
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $caseStudy->image) }}" class="img-fluid rounded mb-4"
                    alt="{{ $caseStudy->title }}">
            </div>
            <!-- Case Study Content -->
            <div class="col-md-6">
                <h2 class="mb-3">{{ $caseStudy->title }}</h2>
                <p class="text-muted">{{ $caseStudy->description }}</p>
                <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Back to Home</a>
            </div>
        </div>
    </div>
@endsection
