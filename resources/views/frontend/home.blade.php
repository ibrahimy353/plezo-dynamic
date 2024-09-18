@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner w-100">
            {{-- @foreach ($heroData as $index => $hero)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $hero->image) }}" class="d-block w-100 object-cover"
                        alt="{{ $hero->title }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-white font-extrabold text-8xl">{{ $hero->title }}</h1>
                        <p>{{ $hero->description }}</p>
                    </div>
                </div>
            @endforeach --}}
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Partners Section -->
    <div class="partners-section bg-white py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Partners</h2>
            <div class="partners d-flex flex-wrap justify-around align-items-center">
                {{-- @foreach ($partners as $partner)
                    <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}"
                        class="partner-logo img-fluid mb-3">
                @endforeach --}}
            </div>
        </div>
    </div>


    <!-- Case Studies Section -->
    <div class="case-studies-section bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Case Studies</h2>
            <div class="row">
                @foreach ($caseStudies as $index => $caseStudy)
                    <div class="col-md-4 mb-4 d-flex">
                        <div class="card flex-fill d-flex flex-column">
                            <img src="{{ asset('storage/' . $caseStudy->image) }}" class="card-img-top"
                                alt="{{ $caseStudy->title }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $caseStudy->title }}</h5>
                                <p class="card-text flex-grow-1">{{ Str::limit($caseStudy->description, 100) }}</p>
                                <a href="{{ route('case_studies.show', $caseStudy->id) }}" class="btn btn-primary mt-3">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
