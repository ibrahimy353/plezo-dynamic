@extends('layouts.auth')
@section('content')
    <div class="container">
        <h2>Partners</h2>
        <a href="#" class="btn btn-primary mb-3">Add Partner</a>
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Logo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($partners as $partner)
                    <tr>
                        <td>{{ $partner->name }}</td>
                        <td>
                            @if ($partner->logo)
                                <img src="{{ asset('storage/partners/' . $partner->logo) }}" alt="{{ $partner->name }}"
                                    style="width: 100px;">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('partners.edit', $partner->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('partners.destroy', $partner->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
