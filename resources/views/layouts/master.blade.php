<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
		<meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
		<meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
		<title>Ads App</title>


		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
        {!! HTML::style('css/bootstrap.min.css') !!}

		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
        {!! HTML::style('plugins/font-awesome/css/font-awesome.min.css') !!}
        {!! HTML::style('plugins/datepicker/datepicker.min.css') !!}
        {!! HTML::style('css/style.css') !!}
        {!! HTML::style('css/style-responsive.css') !!}
				{!! HTML::style('plugins/datatable/css/bootstrap.datatable.min.css') !!}

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->


	</head>

	<body class="tooltips">
        <div class="wrapper">
            <div class="top-navbar">
				<div class="top-navbar-inner">

					<!-- Begin Logo brand -->
					<div class="logo-brand">
						<a href="index.html">
                            <!-- <img src="assets/img/sentir-logo-primary.png" alt="Sentir logo"> -->
                        </a>
					</div><!-- /.logo-brand -->
					<!-- End Logo brand -->

					<div class="top-nav-content no-right-sidebar">

						<!-- Begin button sidebar left toggle -->
						<div class="btn-collapse-sidebar-left">
							<i class="fa fa-bars"></i>
						</div><!-- /.btn-collapse-sidebar-left -->
						<!-- End button sidebar left toggle -->

						<!-- Begin button nav toggle -->
						<div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
							<i class="fa fa-plus icon-plus"></i>
						</div><!-- /.btn-collapse-sidebar-right -->
						<!-- End button nav toggle -->


						<!-- Begin user session nav -->
						<ul class="nav-user navbar-right full">
							<li class="dropdown">
							  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
								<!-- <img src="assets/img/avatar/avatar-1.jpg" class="avatar img-circle" alt="Avatar"> -->
								Hola, <strong>{{ $userName }}</strong>
							  </a>
							  <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
								<li><a href="#fakelink">Mi cuenta</a></li>
								<li class="divider"></li>
								<li>{!! HTML::link('auth/logout', 'Logout') !!}</li>
							  </ul>
							</li>
						</ul>
						<!-- End user session nav -->

						<!-- Begin Collapse menu nav -->
						<div class="collapse navbar-collapse" id="main-fixed-nav">
							<!-- Begin nav search form -->
							<!-- <form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
							</form> -->
							<!-- End nav search form -->
							
						</div><!-- /.navbar-collapse -->
						<!-- End Collapse menu nav -->
					</div><!-- /.top-nav-content -->
				</div><!-- /.top-navbar-inner -->
			</div><!-- /.top-navbar -->

            <!-- BEGIN SIDEBAR LEFT -->
			<div class="sidebar-left sidebar-nicescroller">
				<ul class="sidebar-menu">
					<li>
						<a href="{!! URL::route('dashboard') !!}">
							<i class="fa fa-dashboard icon-sidebar"></i>
							Inicio
						</a>
					</li>
					<li>
						<a href="{!! URL::route('user') !!}">
							<i class="fa fa-bomb icon-sidebar"></i>
							Usuarios
						</a>
						<ul class="submenu">
							<li><a href="{!! URL::route('company.index') !!}">Listar</a></li>
							<li><a href="{!! URL::route('company.create') !!}">Agregar</a></li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-flask icon-sidebar"></i>
							Empresas
						</a>
						<ul class="submenu">
							<li><a href="{!! URL::route('company.index') !!}">Listar</a></li>
							<li><a href="{!! URL::route('company.create') !!}">Agregar</a></li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-desktop icon-sidebar"></i>
							Campañas
						</a>
						<ul class="submenu">
							<li><a href="{!! URL::route('campain.index') !!}">Listar</a></li>
							<li><a href="{!! URL::route('campain.create') !!}">Agregar</a></li>
						</ul>
					</li>
					<!-- <li>
						<a href="{!! URL::route('test') !!}">
							<i class="fa fa-flask icon-sidebar"></i>
							Pruebas A/B
						</a>
					</li> -->
					<li>
						<a href="{!! URL::route('report') !!}">
							<i class="fa fa-folder icon-sidebar"></i>
							Reportes
						</a>
					</li>
					<!-- <li>
						<a href="#fakelink">
							<i class="fa fa-desktop icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							Empresas
							<span class="badge badge-warning span-sidebar">9</span>
							</a>
						<ul class="submenu">
							<li><a href="#fakelink">Default layout<span class="label label-success span-sidebar">CURRENT</span></a></li>
							<li><a href="layout-no-sidebar-right.html">No sidebar right</a></li>
							<li><a href="layout-profile-left.html">Profile summary left</a></li>
							<li><a href="layout-no-sidebar-left.html">No sidebar left</a></li>
							<li><a href="layout-shrink-navbar.html">Shrink navbar</a></li>
							<li><a href="layout-top-navigation.html">Top navigation</a></li>
							<li><a href="layout-tour.html">Tour layout</a></li>
							<li><a href="layout-hidden-sidebar-left.html">Hidden sidebar left</a></li>
							<li><a href="layout-top-notification.html">Top notification</a></li>
						</ul>
					</li> -->
					<!-- <li>
						<a href="#fakelink">
							<i class="fa fa-flask icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							Widget UI kits
						</a>
						<ul class="submenu">
							<li><a href="widget-default.html">Default</a></li>
							<li><a href="widget-store.html">Store</a></li>
							<li><a href="widget-real-estate.html">Real estate <span class="label label-warning span-sidebar">HOT</span></a></li>
							<li><a href="widget-blog.html">Blog</a></li>
							<li><a href="widget-social.html">Social <span class="label label-warning span-sidebar">HOT</span></a></li>
						</ul>
					</li> -->
					<!-- <li>
						<a href="#fakelink">
							<i class="fa fa-folder icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							Basic elements
							<span class="label label-info span-sidebar">BS3</span>
							</a>
						<ul class="submenu">
							<li><a href="element-typography.html">Typography</a></li>
							<li><a href="element-form.html">Form element</a></li>
							<li><a href="element-form-example.html">Form example</a></li>
							<li><a href="element-wyswyg.html">Form WYSWYG</a></li>
							<li><a href="element-validation.html">Form validation</a></li>
							<li><a href="element-button.html">Button</a></li>
						</ul>
					</li>
					<li>
						<a href="#fakelink">
							<i class="fa fa-folder-open icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							More elements
						</a>
						<ul class="submenu">
							<li><a href="element-icon.html">Icons <span class="badge badge-info span-sidebar">3</span></a></li>
							<li><a href="element-box-panel.html">Box &amp; panel</a></li>
							<li><a href="element-nav-dropdown.html">Nav &amp; dropdown</a></li>
							<li><a href="element-breadcrumb-pagination.html">Breadcrumb &amp; pagination</a></li>
							<li><a href="element-thumbnail-jumbotron.html">Jumbotron &amp; thumbnail</a></li>
							<li><a href="element-alert-progress-bar.html">Alert &amp; progress</a></li>
							<li><a href="element-list-media.html">List group &amp; media object</a></li>
							<li><a href="element-collapse.html">Collapse</a></li>
							<li><a href="element-grid-masonry.html">Grid &amp; masonry</a></li>
							<li><a href="element-masonry-js.html">Masonry JS</a></li>
							<li><a href="element-toastr.html">Toastr notifications</a></li>
							<li><a href="element-carousel.html">Carousel</a></li>
							<li><a href="element-calendar.html">Calendar</a></li>
							<li><a href="element-extra.html">Extra elements</a></li>
						</ul>
					</li>
					<li>
						<a href="#fakelink">
							<i class="fa fa-table icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							Tables
						</a>
						<ul class="submenu">
							<li><a href="table-static.html">Static table</a></li>
							<li><a href="table-color.html">Table color</a></li>
							<li><a href="table-datatable.html">Jquery datatable</a></li>
						</ul>
					</li>
					<li>
						<a href="#fakelink">
							<i class="fa fa-bar-chart-o icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							Chart or Graph
						</a>
						<ul class="submenu">
							<li><a href="chart-morris.html">Morris chart</a></li>
							<li><a href="chart-c3.html">C3 chart</a></li>
							<li><a href="chart-flot.html">Flot chart</a></li>
							<li><a href="chart-easy-knob.html">Easy pie chart &amp; knob</a></li>
						</ul>
					</li> -->
					<!-- <li class="static">EXTRA DESIGNS</li>
					<li>
						<a href="#fakelink">
							<i class="fa fa-envelope icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							Mail apps
							<span class="label label-warning span-sidebar">HOT</span>
						</a>
						<ul class="submenu">
							<li><a href="mail-inbox.html">Inbox <span class="badge badge-success span-sidebar">6</span></a></li>
							<li><a href="mail-send.html">Sent mail</a></li>
							<li><a href="mail-new.html">New mail</a></li>
							<li><a href="mail-contact.html">Mail contact</a></li>
							<li><a href="mail-read.html">Read mail</a></li>
							<li><a href="mail-reply.html">Reply mail</a></li>
						</ul>
					</li>
					<li>
						<a href="#fakelink">
							<i class="fa fa-shopping-cart icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							Store apps
						</a>
						<ul class="submenu">
							<li><a href="store-product-list.html">Product list</a></li>
							<li><a href="store-product-column.html">Product column</a></li>
							<li><a href="store-product-masonry.html">Product masonry</a></li>
							<li><a href="store-product-detail.html">Product detail</a></li>
							<li><a href="store-shopping-cart.html">Shopping cart</a></li>
							<li><a href="store-checkout.html">Checkout</a></li>
							<li><a href="store-new-product.html">Add new product</a></li>
							<li><a href="store-orderlist.html">Order list</a></li>

						</ul>
					</li>
					<li>
						<a href="#fakelink">
							<i class="fa fa-home icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							Real estate apps
							</a>
						<ul class="submenu">
							<li><a href="real-estate-property-list.html">Property list</a></li>
							<li><a href="real-estate-property-column.html">Property column</a></li>
							<li><a href="real-estate-property-masonry.html">Property masonry</a></li>
							<li><a href="real-estate-property-detail.html">Property detail</a></li>
							<li><a href="real-estate-property-search.html">Search property</a></li>
						</ul>
					</li>
					<li>
						<a href="#fakelink">
							<i class="fa fa-comment icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							<span class="label label-success span-sidebar">TOP</span>
							Blog apps
						</a>
						<ul class="submenu">
							<li><a href="blog-list.html">Blog list</a></li>
							<li><a href="blog-column.html">Blog column</a></li>
							<li><a href="blog-masonry.html">Blog masonry</a></li>
							<li><a href="blog-detail.html">Blog detail</a></li>
							<li><a href="blog-home.html">Featured home</a></li>
							<li><a href="blog-new.html">Add new blog</a></li>
							<li><a href="blog-comments.html">Comments</a></li>
						</ul>
					</li>
					<li>
						<a href="#fakelink">
							<i class="fa fa-users icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							Social apps
						</a>
						<ul class="submenu">
							<li><a href="social-home.html">Home activity</a></li>
							<li><a href="social-my-profile.html">My profile</a></li>
							<li><a href="social-friendlist.html">Friend list <span class="badge badge-info span-sidebar">5</span></a></li>
							<li><a href="social-timeline.html">Timeline</a></li>
							<li><a href="social-photos.html">Photos</a></li>
						</ul>
					</li>
					<li>
						<a href="#fakelink">
							<i class="fa fa-heart icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							Example pages
						</a>
						<ul class="submenu">
							<li><a href="login.html">Login</a></li>
							<li><a href="lock-screen.html">Lock screen</a></li>
							<li><a href="forgot-password.html">Forgot password</a></li>
							<li><a href="register.html">Register</a></li>
							<li><a href="example-pricing-table.html">Pricing table</a></li>
							<li><a href="example-invoice.html">Invoice</a></li>
							<li><a href="example-faq.html">FAQ</a></li>
							<li><a href="example-search.html">Search page</a></li>
							<li><a href="example-media-library.html">Media library</a></li>
							<li><a href="404.html">404</a></li>
							<li><a href="blank.html">Blank page</a></li>
						</ul>
					</li>

					<li class="static">SYSTEM SETTING</li>
					<li class="text-content">
						<div class="switch">
							<div class="onoffswitch blank">
								<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="alertme" checked>
								<label class="onoffswitch-label" for="alertme">
									<span class="onoffswitch-inner"></span>
									<span class="onoffswitch-switch"></span>
								</label>
							</div>
						</div>
						Alert me when system down
					</li>
					<li class="text-content">
						<div class="switch">
							<div class="onoffswitch blank">
								<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="autoupdate">
								<label class="onoffswitch-label" for="autoupdate">
									<span class="onoffswitch-inner"></span>
									<span class="onoffswitch-switch"></span>
								</label>
							</div>
						</div>
						Automatic update
					</li>
					<li class="text-content">
						<div class="switch">
							<div class="onoffswitch blank">
								<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="dailyreport">
								<label class="onoffswitch-label" for="dailyreport">
									<span class="onoffswitch-inner"></span>
									<span class="onoffswitch-switch"></span>
								</label>
							</div>
						</div>
						Daily task report
					</li> -->
					<!-- <li class="text-content">
						<div class="switch">
							<div class="onoffswitch blank">
								<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="remembercomputer" checked>
								<label class="onoffswitch-label" for="remembercomputer">
									<span class="onoffswitch-inner"></span>
									<span class="onoffswitch-switch"></span>
								</label>
							</div>
						</div>
						Remember this computer
					</li> -->
				</ul>
			</div><!-- /.sidebar-left -->
			<!-- END SIDEBAR LEFT -->
        </div>

        <!-- BEGIN PAGE CONTENT -->
		<div class="page-content">

			<div class="container-fluid">
                 @yield('content')
            </div>

        </div><!-- /.page-content -->

		<!-- BEGIN BACK TO TOP BUTTON -->
		<div id="back-top">
			<a href="#top"><i class="fa fa-chevron-up"></i></a>
		</div>
		<!-- END BACK TO TOP -->


		<!--
		===========================================================
		END PAGE
		===========================================================
		-->

		<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
				{!! HTML::script('js/jquery.min.js') !!}
				{!! HTML::script('js/bootstrap.min.js') !!}
				{!! HTML::script('plugins/retina/retina.min.js') !!}
				{!! HTML::script('plugins/nicescroll/jquery.nicescroll.js') !!}
				{!! HTML::script('plugins/slimscroll/jquery.slimscroll.min.js') !!}
				{!! HTML::script('plugins/backstretch/jquery.backstretch.min.js') !!}
				{!! HTML::script('plugins/datepicker/bootstrap-datepicker.js') !!}

				{!! HTML::script('plugins/datatable/js/jquery.dataTables.js') !!}
				{!! HTML::script('plugins/datatable/js/bootstrap.datatable.js') !!}

		<!-- MAIN APPS JS -->
				{!! HTML::script('js/apps.js') !!}

	</body>
</html>
