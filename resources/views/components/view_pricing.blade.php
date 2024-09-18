@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> Dashboard / View Pricing Levels
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-tags fa-fw"></i> View Pricing Levels
                    </h3>
                </div>

                <div class="panel-body">
                    <a href="{{ route('create_pricing') }}" class="btn btn-primary">Add New Pricing Level</a>
                    <div class="table-responsive mt-4">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Features</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pricingLevels as $level)
                                    <tr>
                                        <td>{{ $level->name }}</td>
                                        <td>{{ $level->description }}</td>
                                        <td>${{ number_format($level->price, 2) }}</td>
                                        <td>
                                            <ul>
                                                @foreach ($level->features as $feature)
                                                    <li>{{ $feature->feature }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="{{ route('edit_pricing', $level->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('delete_pricing', $level->id) }}" method="POST"
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
                </div>
            </div>
        </div>
    </div>
@endsection
