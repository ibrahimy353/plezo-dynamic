@extends('layouts.auth')

@section('content')
    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li>

                    <i class="fa fa-dashboard"></i> Dashboard / View Testimonials

                </li>
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-tags fa-fw"></i> View Testimonials

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->



                <div class="col-lg-3 col-md-3"><!-- col-lg-3 col-md-3 begin -->
                    <div class="panel panel-primary"><!-- panel panel-primary begin -->
                        <div class="panel-heading"><!-- panel-heading begin -->
                            <h3 class="panel-title" align="center"><!-- panel-title begin -->
                                Testimonial

                            </h3><!-- panel-title finish -->
                        </div><!-- panel-heading finish -->

                        <div class="panel-body"><!-- panel-body begin -->

                            <img src="" alt="" class="img-responsive">

                        </div><!-- panel-body finish -->

                        <div class="panel-footer"><!-- panel-footer begin -->
                            <center><!-- center begin -->

                                <a href="#" class="pull-right"><!-- pull-right begin -->

                                    <i class="fa fa-trash"></i> Delete

                                </a><!-- pull-right finish -->

                                <a href="#" class="pull-left"><!-- pull-left begin -->

                                    <i class="fa fa-pencil"></i> Edit

                                </a><!-- pull-left finish -->

                                <div class="clearfix"></div>

                            </center><!-- center finish -->
                        </div><!-- panel-footer finish -->

                    </div><!-- panel panel-primary finish -->
                </div><!-- col-lg-3 col-md-3 finish -->



            </div><!-- panel-body finish -->

        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
    </div><!-- row 2 finish -->
@endsection
