<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NFC Admin - @yield('title')</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/core.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/colors.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{ asset('js/core/libraries/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/core/libraries/bootstrap.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ asset('js/core/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/forms/select2.min.js') }}"></script>
<!--        <script type="text/javascript" src="{{ asset('js/form_select2.js') }}"></script>-->
<!--        <script type="text/javascript" src="{{ asset('js/form_checkboxes_radios.js') }}"></script>-->
        
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('img/nfc_admin_logo.png') }}" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<!-- <li><a href="2_col.html#">Text link</a></li>

				<li>
					<a href="2_col.html#">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right">Icon link</span>
					</a>
				</li> -->
				@if (!Auth::guest())
					<li class="dropdown dropdown-user">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{ asset('images/image.png') }}" alt="">
							<span>{{ Auth::user()->name }}</span>
							<i class="caret"></i>
						</a>

						<ul class="dropdown-menu dropdown-menu-right">
							<!-- <li><a href="2_col.html#"><i class="icon-user-plus"></i> My profile</a></li> -->
							<!-- <li><a href="2_col.html#"><i class="icon-coins"></i> My balance</a></li>
							<li><a href="2_col.html#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
							<li class="divider"></li>
							<li><a href="2_col.html#"><i class="icon-cog5"></i> Account settings</a></li> -->
							<li><a href="{{ route('logout') }}"
								onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();"><i class="icon-switch2"></i> Logout</a></li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
							</form>
						</ul>
					</li>
				@endif
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					@if (!Auth::guest())
						<div class="sidebar-user">
							<div class="category-content">
								<div class="media">
									<a href="2_col.html#" class="media-left"><img src="{{ asset('images/image.png') }}" class="img-circle img-sm" alt=""></a>
									<div class="media-body">
										<span class="media-heading text-semibold">{{ Auth::user()->name }}</span>
										<!-- <div class="text-size-mini text-muted">
											<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
										</div> -->
									</div>
									<div class="media-right media-middle">
										<ul class="icons-list">
											<li>
												<a title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();
																 document.getElementById('logout-form').submit();"><i class="icon-switch2"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					@endif
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<!-- Main menu -->
							@if (Auth::guest())
								<ul class="navigation navigation-main navigation-accordion">
								  <li class="navigation-header"><span>Main Menu</span> <i class="icon-menu" title="Main pages"></i></li>
								  <li><a href="{{ route('home') }}"><i class="icon-home4"></i> <span>Home</span></a></li>
								</ul>
							@else
                                                            @inject('menus', 'App\Providers\MenuServiceProvider')
                                                            <ul class="navigation navigation-main navigation-accordion">
                                                                <li class="navigation-header"><span>Main Menu</span> <i class="icon-menu" title="Main pages"></i></li>
                                                                @foreach ($menus->render(Auth::user()->id) as $menu)
                                                                  <li><a href="{{ $menu->link }}"><i class="{{ $menu->icone }}"></i> <span>{{ $menu->nome }}</span></a></li>
                                                                @endforeach
                                                            </ul>
							@endif
							<!-- /main menu -->
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							@if (Auth::guest())
								<h4><i class="icon-users2 position-left"></i>
									<span class="text-semibold">Guest Area</span> - @yield('title') Page</h4>
							@else
								<h4><i class="icon-user-lock position-left"></i>
									<span class="text-semibold">Admin Area</span> - @yield('title') Page</h4>
							@endif
						</div>

						<div class="heading-elements">
							@if (Auth::guest())
									<a href="{{ route('register') }}" class="btn btn-labeled btn-labeled-right bg-blue heading-btn">Register <b><i class="icon-menu7"></i></b></a>
							@endif

						</div>
					</div>

					<!-- Breadcrumbs area -->
					<div class="breadcrumb-line breadcrumb-line-component">
						@yield('breadcrumbs')
					</div>
					<!-- /Breadcrumbs area -->
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
                                    
					<!-- Simple panel -->
					@yield('content')
					<!-- /simple panel -->

					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2018. <a href="{{ route('home') }}">NFC Admin App</a> by <a href="http://www.seriallink.com.br" target="_blank">Serial Link</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
