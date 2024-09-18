@extends('layouts.auth')

@section('content')
    <div class="container">
        <h1>Edit Case Study</h1>
        <form action="{{ route('case_studies.update', $caseStudy->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $caseStudy->title }}"
                    required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{ $caseStudy->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @if ($caseStudy->image)
                    <img src="{{ asset('storage/' . $caseStudy->image) }}" alt="Case Study Image" class="mt-2"
                        style="max-width: 200px;">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
