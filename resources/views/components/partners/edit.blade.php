@extends('layouts.auth')
@section('content')
    <div class="container">
        <h2>Edit Partner</h2>
        <form action="{{ route('partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Partner Name</label>
                <input type="text" name="name" class="form-control" value="{{ $partner->name }}" required>
            </div>
            <div class="mb-3">
                <label for="logo">Partner Logo</label>
                <input type="file" name="logo" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
