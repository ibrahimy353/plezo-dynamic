@extends('layouts.auth')
@section('content')
    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li>

                    <i class="fa fa-dashboard"></i> Dashboard / Insert About Us

                </li>
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-sticky-note-o fa-fw"></i> Insert About Us

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

                <div class="panel-body"><!-- panel-body begin -->
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <!-- form-horizontal begin -->
                        <div class="form-group"><!-- form-group 1 begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                                Enter About Us Title

                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="aboutus_name" type="text" class="form-control">

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group 1 finish -->
                        <div class="form-group"><!-- form-group 2 begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                                About Us

                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input name="aboutus_url" type="text" class="form-control">

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group 2 finish -->
                        <div class="form-group"><!-- form-group 3 begin -->

                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                                About Us Message

                            </label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input type="file" name="aboutus_image" class="form-control">

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group 3 finish -->
                        <div class="form-group"><!-- form-group 4 begin -->

                            <label for=""
                                class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish -->

                            <div class="col-md-6"><!-- col-md-6 begin -->

                                <input type="submit" name="submit" value="Submit Now"
                                    class="btn btn-primary form-control">

                            </div><!-- col-md-6 finish -->

                        </div><!-- form-group 4 finish -->
                    </form><!-- form-horizontal finish -->
                </div><!-- panel-body finish -->

            </div><!-- panel panel-default finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 2 finish -->
@endsection
