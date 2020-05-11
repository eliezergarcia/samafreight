<!DOCTYPE html>

<!--
Theme: Keen - The Ultimate Bootstrap Admin Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: You must have a valid license purchased only from https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/ in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>{{ config('app.name', 'Sama Freight') }}</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Raleway:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="{{ asset('assets/css/skins/header/navy.css') }}" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/samafreight-logo.png') }}" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-aside--enabled kt-aside--left kt-aside--fixed kt-aside--offcanvas-default kt-page--loading">

		@include('layouts.partials.page-loader')

		
		<!-- begin:: Page -->

		@include('layouts.partials._header.base-mobile')
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page" id="app">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!--[html-partial:include:{"file":"partials/_header/base.html"}]/-->
					@include('layouts.partials._header.base')

					
						<!--[html-partial:include:{"file":"partials/_subheader/base.html"}]/-->
						@yield('subheader')
						<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
							<div class="kt-container  kt-grid__item kt-grid__item--fluid">
								@yield('content')
								@yield('modals')
							</div>
							<!--[html-partial:include:{"file":"partials/_content/base.html"}]/-->
						</div>
					


					<!--[html-partial:include:{"file":"partials/_footer/base.html"}]/-->
					@include('layouts.partials._footer.base')
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!--[html-partial:include:{"file":"partials/_aside/base.html"}]/-->
		@include('layouts.partials._aside.base')

		<!-- begin:: Topbar Offcanvas Panels -->

		<!--[html-partial:include:{"file":"partials/_topbar/offcanvas/search.html"}]/-->
		<!-- @include('layouts.partials._topbar.offcanvas.search') -->

		<!--[html-partial:include:{"file":"partials/_topbar/offcanvas/notifications.html"}]/-->
		@include('layouts.partials._topbar.offcanvas.notifications')

		<!--[html-partial:include:{"file":"partials/_topbar/offcanvas/quick-actions.html"}]/-->
		@include('layouts.partials._topbar.offcanvas.quick-actions')

		<!--[html-partial:include:{"file":"partials/_topbar/offcanvas/user.html"}]/-->
		@include('layouts.partials._topbar.offcanvas.user')

		<!-- end:: Topbar Offcanvas Panels -->

		<!--[html-partial:include:{"file":"partials/_quick-panel.html"}]/-->
		@include('layouts.partials.quick-panel')

		<!--[html-partial:include:{"file":"partials/_scrolltop.html"}]/-->
		@include('layouts.partials.scrolltop')

		<!--[html-partial:include:{"file":"partials/_toolbar.html"}]/-->

		<!--[html-partial:include:{"file":"partials/_demo-panel.html"}]/-->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#1cac81",
						"metal": "#c4c5d6",
						"light": "#ffffff",
						"accent": "#00c5dc",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995",
						"focus": "#9816f4"
					},
					"base": {
						"label": [
							"#b9bdc1",
							"#aeb2b7",
							"#414b4c",
							"#343d3e"
						],
						"shape": [
							"#eef4f3",
							"#e0e9e6",
							"#80c3af",
							"#41675c"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="{{ asset('assets/js/pages/dashboard.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/pages/components/forms/widgets/bootstrap-select.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/pages/components/base/tooltips.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/pages/custom/profile/overview-3.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/pages/custom/profile/profile.js') }}" type="text/javascript"></script>

		<script src="{{ asset('assets/js/vue.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/axios.min.js') }}" type="text/javascript"></script>

		<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
		<!--end::Page Scripts -->

		@yield('scripts')
	</body>

	<!-- end::Body -->
</html>