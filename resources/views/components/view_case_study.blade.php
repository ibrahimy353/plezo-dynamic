@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> Dashboard / View Case Studies
                </li>
            </ol>
        </div>

    </div>

    <div class="row">
        @foreach ($caseStudies as $caseStudy)
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $caseStudy->title }}</h3>
                    </div>

                    <div class="panel-body">
                        @if ($caseStudy->image)
                            <img src="{{ asset('storage/' . $caseStudy->image) }}" alt="{{ $caseStudy->title }}"
                                class="img-responsive">
                        @endif
                        <p>{{ Str::limit($caseStudy->description, 100, '...') }}</p>
                    </div>

                    <div class="panel-footer">
                        <a href="{{ route('case_studies.edit', $caseStudy->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('case_studies.destroy', $caseStudy->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
