@extends('layouts.auth')

@section('content')
    <div class="container">
        <h2>How It Works List</h2>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif


        <div class="row">
            @foreach ($howItWorks as $how_it_works)
                <div class="col-lg-3 col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $how_it_works->title }}</h3>
                        </div>

                        <div class="panel-body">
                            @if ($how_it_works->image)
                                <img src="{{ asset('storage/' . $how_it_works->image) }}" alt="{{ $how_it_works->title }}"
                                    class="img-responsive">
                            @endif
                            <p>{{ $how_it_works->description }}</p>
                        </div>

                        <div class="panel-footer">
                            <a href="{{ route('edit_hero', $how_it_works->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('delete_how_it_works', $how_it_works->id) }}" method="POST"
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

    </div>
@endsection
