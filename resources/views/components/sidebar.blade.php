<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top begin -->
    <div class="navbar-header"><!-- navbar-header begin -->

        <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse"><!-- navbar-toggle begin -->

            <span class="sr-only">Toggle Navigation</span>

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

        </button><!-- navbar-toggle finish -->

        <a href="index.php?dashboard" class="navbar-brand">Plezo PoS Admin</a>

    </div><!-- navbar-header finish -->

    <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav begin -->

        <li class="dropdown"><!-- dropdown begin -->

            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle begin -->

                <i class="fa fa-user"></i> ibra <b class="caret"></b>

            </a><!-- dropdown-toggle finish -->

            <ul class="dropdown-menu"><!-- dropdown-menu begin -->
                <li><!-- li begin -->
                    <a href="index.php?user_profile=3"><!-- a href begin -->

                        <i class="fa fa-fw fa-user"></i> My Profile

                    </a><!-- a href finish -->
                </li><!-- li finish -->



                <li><!-- li begin -->
                    <a href="index.php?view_customers"><!-- a href begin -->

                        <i class="fa fa-fw fa-users"></i> Log activities

                    </a><!-- a href finish -->
                </li><!-- li finish -->

                <li><!-- li begin -->
                    <a href="index.php?view_cats"><!-- a href begin -->

                        <i class="fa fa-fw fa-gear"></i> Settings


                    </a><!-- a href finish -->
                </li><!-- li finish -->

                <li class="divider"></li>

                <li class="list1"><!-- li begin -->

                    <a href="#" class="dropdown-item border-none fa fa-fw fa-power-off "
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    {{-- <form method="post" action="{{ route('logout') }}">
                        <button class=" justify-center self-center"><i
                                class="dropdown-item border-none fa fa-fw fa-power-off "></i>Logout</button>
                        @csrf
                    </form> --}}
                    <!-- a href finish -->
                </li><!-- li finish -->

            </ul><!-- dropdown-menu finish -->

        </li><!-- dropdown finish -->

    </ul><!-- nav navbar-right top-nav finish -->


    <!-- SIDE NAV START -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <!-- collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav begin -->
            <li><!-- li begin -->
                <a href="{{ route('dashboard') }}"><!-- a href begin -->

                    <i class="fa fa-fw fa-dashboard"></i> Dashboard

                </a><!-- a href finish -->

            </li><!-- li finish -->
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slides"><!-- a href begin -->

                    <i class="fa fa-fw fa-ship"></i> Hero Section
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="slides" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        {{-- <a href="{{ route('create_hero') }}">Insert Slide</a> --}}
                    </li><!-- li finish -->

                    <li><!-- li begin -->
                        <a href="{{ route('view_hero') }}">View Slides</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->





            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#howitworks"><!-- a href begin -->

                    <i class="fa fa-fw fa-book"></i> How It Works Content
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="howitworks" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="{{ route('insert_how_it_works') }}"> Insert Content</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="{{ route('view_how_it_works') }}"> View Content </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->


            {{-- Case Studies Start --}}
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#casestudies"><!-- a href begin -->

                    <i class="fa fas fa-briefcase	"></i> Case Studies
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="casestudies" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="{{ route('insert_case_study') }}">Insert Case Study</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="{{ route('view_case_studies') }}">View Case Studies </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->

            {{-- Case Studies Start --}}
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#partners"><!-- a href begin -->
                    <i class="fa fa-connectdevelop"></i> Partners
                    <i class="fa fa-fw fa-caret-down"></i>
                </a><!-- a href finish -->

                <ul id="partners" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="{{ route('partners.create') }}"> Insert Partners Logos</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="{{ route('partners.index') }}">View Partners Logos</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
            </li><!-- li finish -->


            {{-- Pricing Start --}}
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#pricing"><!-- a href begin -->

                    <i class="	fa fa-dollar	"></i> Pricing
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="pricing" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="{{ route('insert_pricing') }}"> Add Pricing</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="{{ route('view_pricing') }}">View Pricings </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->


            {{-- Testimonial Start --}}
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#testimonial"><!-- a href begin -->

                    <i class="fa fa-comments-o"></i> testimonial
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="testimonial" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="{{ route('inserttestimonial') }}"> Add Testimonial</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="{{ route('viewtestimonial') }}">View Testimonials </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->


            {{-- About Us Start --}}
            {{-- <li>
                <a href="#" data-toggle="collapse" data-target="#aboutus">

                    <i class="fa fa-users"></i> About us
                    <i class="fa fa-fw fa-caret-down"></i>

                </a>

                <ul id="aboutus" class="collapse">
                    <li>
                        <a href="{{ route('insertaboutus') }}"> Add About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('viewaboutus') }}">View About Us </a>
                    </li>
                </ul>

            </li> --}}

            {{-- Terms --}}
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#terms"><!-- a href begin -->

                    <i class="fa fa-files-o"></i> Terms
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="terms" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="{{ route('termsandcondition') }}">Insert Terms</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="{{ route('viewtermsandcondition') }}"> View Terms </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->


            <li><!-- li begin -->
                <a href="logout.php"><!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href finish -->
            </li><!-- li finish -->

        </ul><!-- nav navbar-nav side-nav finish -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->

</nav><!-- navbar navbar-inverse navbar-fixed-top finish -->
