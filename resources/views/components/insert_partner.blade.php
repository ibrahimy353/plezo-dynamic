@extends('layouts.auth')

@section('content')
    <div class="container">
        <h2>Add Partner Logo</h2>
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <form action="{{ route('store_partner') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name">Partner Name</label>
                <input type="text" name="name" class="form-control" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="logo">Upload Logo</label>
                <input type="file" name="logo" class="form-control">
                @error('logo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <a href="{{ route('view_partners') }}" class="btn btn-secondary mt-3">View Partners</a>
    </div>
@endsection
