
<!-- begin:: Header Topbar -->
<div class="kt-header__topbar kt-grid__item kt-grid__item--fluid">

	<!--begin: Search -->
	<!-- <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown">
		<div class="kt-header__topbar-wrapper" id="kt_offcanvas_toolbar_search_toggler_btn">
			<span class="kt-header__topbar-icon"><i class="flaticon2-search"></i></span>
		</div>
	</div> -->

	<!--end: Search -->

	<!--begin: Notifications -->
	<div class="kt-header__topbar-item">
		<div class="kt-header__topbar-wrapper" id="kt_offcanvas_toolbar_notifications_toggler_btn">
			<span class="kt-header__topbar-icon"><i class="flaticon2-notification"></i></span>
			<span class="kt-badge kt-badge--brand"></span>
		</div>
	</div>

	<!--end: Notifications -->

	<!--begin: Quick actions -->
	<!-- <div class="kt-header__topbar-item">
		<div class="kt-header__topbar-wrapper" id="kt_offcanvas_toolbar_quick_actions_toggler_btn">
			<span class="kt-header__topbar-icon"><i class="flaticon2-settings"></i></span>
		</div>
	</div> -->

	<!--end: Quick actions -->

	<!--begin: Quick panel toggler -->
	<!-- <div class="kt-header__topbar-item" data-toggle="kt-tooltip" title="Quick panel" data-placement="top">
		<div class="kt-header__topbar-wrapper">
			<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn"><i class="flaticon2-menu"></i></span>
		</div>
	</div>
 -->
	<!--begin: Logout button -->
	<div class="kt-header__topbar-item" data-toggle="kt-tooltip" title="Cerrar sesión" data-placement="top">
		<div class="kt-header__topbar-wrapper">
			<span class="kt-header__topbar-icon">
				<a class=""
	                href="{{ route('logout') }}"
	                onclick="event.preventDefault();
	                document.getElementById('logout-form').submit();">
	                <i class="mdi mdi-logout"></i>
						<i class="flaticon-logout"></i>
	            </a>
			</span>
		</div>
	</div>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

	<!--end: Quick panel toggler -->

	<!--begin: Language bar -->
	<!-- <div class="kt-header__topbar-item kt-header__topbar-item--langs">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
			<span class="kt-header__topbar-icon">
				<img class="" src="assets/media/flags/020-flag.svg" alt="" />
			</span>
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">

			[html-partial:include:{"file":"partials/_topbar/dropdown/languages.html"}]/-->
		<!-- </div>
	</div>  -->
	<!--end: Language bar -->

	<!--begin: User bar -->
	<div class="kt-header__topbar-item kt-header__topbar-item--user" id="kt_offcanvas_toolbar_profile_toggler_btn">
		<div class="kt-header__topbar-welcome">
			Hola,
		</div>
		<div class="kt-header__topbar-username">
			{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
		</div>
		<div class="kt-header__topbar-wrapper">
			<img alt="Pic" src="{{ Storage::url(Auth::user()->url) }}" />
		</div>
	</div>

	<!--end: User bar -->
</div>

<!-- end:: Header Topbar -->