@extends('layouts.auth')
@section('content')
    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li>

                    <i class="fa fa-dashboard"></i> Dashboard / Partners

                </li>
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-money fa-fw"></i> Insert Testimonials

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

                <div class="panel-body"><!-- panel-body begin -->
                    <form class="form-horizontal" action="insertSlide" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="POST">

                        <div class="container mt-5">
                            <div class="row">
                                <div class="col-md-12">

                                    @if (session('status'))
                                        <div class="alert alert-success">{{ session('status') }}</div>
                                    @endif

                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Add Testimonials
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ url('categories/create') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="mb-3">
                                                    <label>Client Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ old('name') }}" />
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label>Testimonial Description</label>
                                                    <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                                                    @error('description')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label>Is Active</label>
                                                    <input type="checkbox" name="is_active"
                                                        {{ old('is_active') == true ? checked : '' }} />
                                                    @error('is_active')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label>Upload Client File/Image</label>
                                                    <input type="file" name="image" class="form-control" />
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                    <a href="{{ url('categories') }}"
                                                        class="btn btn-primary float-end">Back</a>

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form><!-- form-horizontal finish -->
                </div><!-- panel-body finish -->

            </div><!-- panel panel-default finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 2 finish -->
@endsection
