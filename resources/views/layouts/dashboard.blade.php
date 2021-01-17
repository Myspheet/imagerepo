<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>{{config('app.name', 'Laravel')}} Admin</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Data table CSS -->
	<link href="{{asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>

	<!-- Toast CSS -->
	<link href="{{asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Morris Charts CSS -->
    <link href="{{asset('vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>

	<!-- Chartist CSS -->
	<link href="{{asset('vendors/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet" type="text/css"/>


	<!-- vector map CSS -->
    <link href="{{asset('vendors/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" type="text/css"/>

    @yield('css')

	<!-- Custom CSS -->
	<link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-2-active navbar-top-light">
		<!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="nav-wrap">
				<div class="mobile-only-brand pull-left">
					<div class="nav-header pull-left">
						<div class="logo-wrap">
							<a href="{{route('dashboard.index')}}" style="font-size: 1.5em">
                                {{Auth::user()->name}}
							</a>
						</div>
					</div>
					<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="ti-align-left"></i></a>
					{{-- <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a> --}}
					<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="ti-more"></i></a>
					<form id="search_form" role="search" class="top-nav-search collapse pull-left">
						<div class="input-group">
							<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
							<span class="input-group-btn">
							<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
							</span>
						</div>
					</form>
				</div>
				<div id="mobile_only_nav" class="mobile-only-nav pull-right">
					<ul class="nav navbar-right top-nav pull-right">
						<li class="dropdown auth-drp">
							<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><i class="fa fa-user fa-3x"></i></a>
							<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
								{{-- <li>
									<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
								</li>

								<li class="divider"></li> --}}
								<li>
									<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.querySelector('#logoutForm').submit()"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				</div>
			</nav>
			<!-- /Top Menu Items -->

			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li class="navigation-header">
						<span>Main</span>
						<hr/>
					</li>
					<li>
						<a class="active" href="{{route('dashboard.index')}}" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="ti-dashboard mr-20"></i><span class="right-nav-text">Public Images</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					</li>
					<li>
						<a class="active" href="{{route('dashboard.index')}}" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="ti-dashboard mr-20"></i><span class="right-nav-text">Private Images</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					</li>
                    <li>
						<a href="{{ route('dashboard.images.create.public') }}"><div class="pull-left"><i class="ti-image mr-20"></i><span class="right-nav-text">Add Public Images </span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					</li>
                    <li>
						<a href="{{ route('dashboard.images.create.private') }}"><div class="pull-left"><i class="ti-image mr-20"></i><span class="right-nav-text">Add Private Images </span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					</li>

					{{-- <li>
						<a href="{{ route('admin.changepassword') }}" data-toggle="collapse" data-target="#comp_dr"><div class="pull-left"><i class="ti-check-box  mr-20"></i><span class="right-nav-text">Change Password</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					</li> --}}
					<li>
                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.querySelector('#logoutForm').submit()" ><div class="pull-left"><i class="ti-book mr-20"></i><span class="right-nav-text">Logout</span></div><div class="clearfix"></div></a>
                        <form action="{{ route('logout') }}" id="logoutForm" method="POST">
                            @csrf
                        </form>
					</li>
				</ul>
			</div>
			<!-- /Left Sidebar Menu -->

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container pt-30">
				<!-- Row -->
				@yield('content')
				<!-- /Row -->

			</div>

			<!-- Footer -->
			<footer class="footer pl-30 pr-30">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<p>2020 &copy; Art Dynasty Cleo</p>
						</div>
					</div>
				</div>
			</footer>
			<!-- /Footer -->

		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

	<!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

	<!-- Data table JavaScript -->
	<script src="{{asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>

	<!-- Slimscroll JavaScript -->
	<script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

	<!-- Progressbar Animation JavaScript -->
	<script src="{{asset('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>

	<!-- Fancy Dropdown JS -->
	<script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

	<!-- Sparkline JavaScript -->
	<script src="{{asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>

	<!-- Owl JavaScript -->
	<script src="{{asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>

	<!-- Switchery JavaScript -->
	<script src="{{asset('vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>

	<!-- Vector Maps JavaScript -->
    <script src="{{asset('vendors/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{asset('vendors/vectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
    <script src="{{asset('vendors/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('dist/js/vectormap-data.js')}}"></script>

	<!-- Toast JavaScript -->
	<script src="{{asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

	<!-- Piety JavaScript -->
	<script src="{{asset('vendors/bower_components/peity/jquery.peity.min.js')}}"></script>
	<script src="{{asset('dist/js/peity-data.js')}}"></script>

	<!-- Chartist JavaScript -->
	<script src="{{asset('vendors/bower_components/chartist/dist/chartist.min.js')}}"></script>

	<!-- Morris Charts JavaScript -->
    <script src="{{asset('vendors/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('vendors/bower_components/morris.js/morris.min.js')}}"></script>
    <script src="{{asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

	<!-- ChartJS JavaScript -->
    <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>

    @yield('js')

	<!-- Init JavaScript -->
	<script src="{{asset('dist/js/init.js')}}"></script>
	<script src="{{asset('dist/js/dashboard-data.js')}}"></script>
</body>

</html>
