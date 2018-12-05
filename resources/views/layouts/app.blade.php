<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Management System') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <!-- mine theme  CSS-->
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <div id="app">
            <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    
  
<!--         <nav class="navbar navbar-inverse navbar-static-top" > -->
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Management System') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
 
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            
                            <!-- <div class="collapse navbar-collapse" id="navbarResponsive"> -->
                              <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                                  <a class="nav-link" href="index.html">
                                    <i class="fa fa-fw fa-dashboard"></i>
                                    <span class="nav-link-text">Dashboard</span>
                                  </a>
                                </li>
                                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                                  <a class="nav-link" href="charts.html">
                                    <i class="fa fa-fw fa-area-chart"></i>
                                    <span class="nav-link-text">Charts</span>
                                  </a>
                                </li>
                              <!--   <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                                  <a class="nav-link" href="tables.html">
                                    <i class="fa fa-fw fa-table"></i>
                                    <span class="nav-link-text">Administrative Tasks</span>
                                  </a>
                                </li> -->
                                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                                    <i class="fa fa-fw fa-wrench"></i>
                                    <span class="nav-link-text">Administrative Tasks</span>
                                  </a>
                                  <ul class="sidenav-second-level collapse" id="collapseComponents">
                                    <li>
                                      <a href="navbar.html">Users</a>
                                    </li>
                                    <li>
                                      <a href="cards.html">Promotions</a>
                                    </li>
                                  </ul>
                                </li>
                                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                                    <i class="fa fa-fw fa-wrench"></i>
                                    <span class="nav-link-text">Students</span>
                                  </a>
                                  <ul class="sidenav-second-level collapse" id="collapseComponents">
                                    <li>
                                      <a href="navbar.html">Active Students</a>
                                    </li>
                                    <li>
                                      <a href="cards.html">Inactive Students</a>
                                    </li>
                                  </ul>
                                </li>
                                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                                    <i class="fa fa-fw fa-wrench"></i>
                                    <span class="nav-link-text">Teachers</span>
                                  </a>
                                  <ul class="sidenav-second-level collapse" id="collapseComponents">
                                    <li>
                                      <a href="navbar.html">Active Teachers</a>
                                    </li>
                                    <li>
                                      <a href="cards.html">Inactive Teachers</a>
                                    </li>
                                  </ul>
                                </li>
                                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                                    <i class="fa fa-fw fa-wrench"></i>
                                    <span class="nav-link-text">Class/Schedule</span>
                                  </a>
                                  <ul class="sidenav-second-level collapse" id="collapseComponents">
                                    <li>
                                      <a href="navbar.html">Add Class</a>
                                    </li>
                                    <li>
                                      <a href="cards.html">Schedule</a>
                                    </li>
                                  </ul>
                                </li>
                                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                                    <i class="fa fa-fw fa-wrench"></i>
                                    <span class="nav-link-text">Attendance</span>
                                  </a>
                                  <ul class="sidenav-second-level collapse" id="collapseComponents">
                                    <li>
                                      <a href="navbar.html">Take Attendance</a>
                                    </li>
                                    <li>
                                      <a href="cards.html">View Attendance</a>
                                    </li>
                                  </ul>
                                </li>
                                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                                    <i class="fa fa-fw fa-wrench"></i>
                                    <span class="nav-link-text">Events</span>
                                  </a>
                                  <ul class="sidenav-second-level collapse" id="collapseComponents">
                                    <li>
                                      <a href="navbar.html">Add Event</a>
                                    </li>
                                    <li>
                                      <a href="cards.html">Events Feed</a>
                                    </li>
                                  </ul>
                                </li>
                                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                                    <i class="fa fa-fw fa-wrench"></i>
                                    <span class="nav-link-text">News</span>
                                  </a>
                                  <ul class="sidenav-second-level collapse" id="collapseComponents">
                                    <li>
                                      <a href="navbar.html">News Feed</a>
                                    </li>
                                    <li>
                                      <a href="cards.html">Add News</a>
                                    </li>
                                  </ul>
                                </li>
                                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                                    <i class="fa fa-fw fa-wrench"></i>
                                    <span class="nav-link-text">Examination</span>
                                  </a>
                                  <ul class="sidenav-second-level collapse" id="collapseComponents">
                                    <li>
                                      <a href="navbar.html">Add Exam</a>
                                    </li>
                                    <li>
                                      <a href="cards.html">Exam List</a>
                                    </li>
                                  </ul>
                                </li>
                                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                                    <i class="fa fa-fw fa-wrench"></i>
                                    <span class="nav-link-text">Fee</span>
                                  </a>
                                  <ul class="sidenav-second-level collapse" id="collapseComponents">
                                    <li>
                                      <a href="navbar.html">Create Receipt</a>
                                    </li>
                                    <li>
                                      <a href="cards.html">Paid Students</a>
                                    </li>
                                  </ul>
                                </li>
                                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                                    <i class="fa fa-fw fa-file"></i>
                                    <span class="nav-link-text">Messages</span>
                                  </a>
                                  <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                                    <li>
                                      <a href="login.html">Create Messages</a>
                                    </li>
                                    <li>
                                      <a href="register.html">Templates</a>
                                    </li>
                                    <li>
                                      <a href="forgot-password.html">Inbox</a>
                                    </li>
                                    <li>
                                      <a href="blank.html">Sent Items</a>
                                    </li>
                                  </ul>
                                </li>
                                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                                    <i class="fa fa-fw fa-sitemap"></i>
                                    <span class="nav-link-text">Menu Levels</span>
                                  </a>
                                  <ul class="sidenav-second-level collapse" id="collapseMulti">
                                    <li>
                                      <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                      <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                      <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                      <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                                      <ul class="sidenav-third-level collapse" id="collapseMulti2">
                                        <li>
                                          <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                          <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                          <a href="#">Third Level Item</a>
                                        </li>
                                      </ul>
                                    </li>
                                  </ul>
                                </li>
                                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Calender">
                                  <a class="nav-link" href="#">
                                    <i class="fa fa-fw fa-calender"></i>
                                    <span class="nav-link-text">Calender</span>
                                  </a>
                                </li>
                              </ul>
                              <ul class="navbar-nav sidenav-toggler">
                                <li class="nav-item">
                                  <a class="nav-link text-center" id="sidenavToggler">
                                    <i class="fa fa-fw fa-angle-left"></i>
                                  </a>
                                </li>
                              </ul>
                             <ul class="navbar-nav ml-auto navbar-right">
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-fw fa-envelope"></i>
                                    <span class="d-lg-none">Messages
                                      <span class="badge badge-pill badge-primary">12 New</span>
                                    </span>
                                    <span class="indicator text-primary d-none d-lg-block">
                                      <i class="fa fa-fw fa-circle"></i>
                                    </span>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">New Messages:</h6>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                      <strong>David Miller</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                      <strong>Jane Smith</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                      <strong>John Doe</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item small" href="#">View all messages</a>
                                  </div>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-fw fa-bell"></i>
                                    <span class="d-lg-none">Alerts
                                      <span class="badge badge-pill badge-warning">6 New</span>
                                    </span>
                                    <span class="indicator text-warning d-none d-lg-block">
                                      <i class="fa fa-fw fa-circle"></i>
                                    </span>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">New Alerts:</h6>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                      <span class="text-success">
                                        <strong>
                                          <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                                      </span>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                      <span class="text-danger">
                                        <strong>
                                          <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                                      </span>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                      <span class="text-success">
                                        <strong>
                                          <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                                      </span>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item small" href="#">View all alerts</a>
                                  </div>
                                </li>
                               <!--  <li class="nav-item">
                                  <form class="form-inline my-2 my-lg-0 mr-lg-2">
                                    <div class="input-group">
                                      <input class="form-control" type="text" placeholder="Search for...">
                                      <span class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                          <i class="fa fa-search"></i>
                                        </button>
                                      </span>
                                    </div>
                                  </form>
                                </li> 
                                <li class="nav-item">
                                  <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                                </li>-->
                              </ul>
                          <!-- </div> -->
                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- mine self theme javascripts -->

        <!-- Bootstrap core JavaScript-->
   
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ asset('js/sb-admin-datatables.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-charts.min.js') }}"></script>
</body>
</html>
