@extends('layouts.auth')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> Dashboard / View Hero
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        @foreach ($heroes as $hero)
            <div class="col-lg-3 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $hero->title }}</h3>
                    </div>

                    <div class="panel-body">
                        @if ($hero->image)
                            <img src="{{ asset('storage/' . $hero->image) }}" alt="{{ $hero->title }}"
                                class="img-responsive">
                        @endif
                        <p>{{ $hero->description }}</p>
                    </div>

                    <div class="panel-footer">
                        <a href="{{ route('edit_hero', $hero->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('delete_hero', $hero->id) }}" method="POST" style="display:inline;">
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
