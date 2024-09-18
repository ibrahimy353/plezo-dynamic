@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Dashboard heading -->
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>

        <div class="row">
            <!-- Case Studies Card -->
            {{-- <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-book fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{ $caseStudiesCount }}</div>
                                <div>Case Studies</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('view_case_studies') }}">
                        <div class="panel-footer">
                            <span class="pull-left">Manage Case Studies</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div> --}}

            <!-- Partners Card -->
            {{-- <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{ $partnersCount }}</div>
                                <div>Partners</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('view_partners') }}">
                        <div class="panel-footer">
                            <span class="pull-left">Manage Partners</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div> --}}

            <!-- Hero Section Card -->
            {{-- <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-image fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{ $heroCount }}</div>
                                <div>Hero Sections</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('view_hero') }}">
                        <div class="panel-footer">
                            <span class="pull-left">Manage Hero Sections</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div> --}}

            <!-- How It Works Card -->
            {{-- <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-cogs fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{ $howItWorksCount }}</div>
                                <div>How It Works</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('view_how_it_works') }}">
                        <div class="panel-footer">
                            <span class="pull-left">Manage How It Works</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
