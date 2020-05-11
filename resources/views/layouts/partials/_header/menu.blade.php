<?php
    function activeMenu($url){
        return request()->is($url) ? 'kt-menu__item--here' : '';
    }

    function activeItem($url){
    	return request()->is($url) ? 'kt-menu__item--active ' : '';	
    }
?>
<!-- begin: Header Menu -->
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
<div class="kt-header-menu-wrapper kt-grid__item" id="kt_header_menu_wrapper">
	<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
		<ul class="kt-menu__nav ">
			<!-- <li class="kt-menu__item  kt-menu__item--open kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open {{ activeMenu('dashboard') }}" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Dashboard</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
				<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
					<ul class="kt-menu__subnav">
						<li class="kt-menu__item " aria-haspopup="true"><a href="index.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Default</span></a></li>
						<li class="kt-menu__item " aria-haspopup="true"><a href="dashboards/content-fluid.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Fluid Content</span></a></li>
					</ul>
				</div>
			</li> -->
			
			<li class="kt-menu__item  kt-menu__item--open kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open {{ activeMenu('tractores') }} {{ activeMenu('cajas') }}" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Mantenimiento</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
				<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
					<ul class="kt-menu__subnav">
						<li class="kt-menu__item {{ activeItem('tractores') }}" aria-haspopup="true"><a href="{{ route('tractores.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Tractores</span></a></li>
						<li class="kt-menu__item {{ activeItem('cajas') }}" aria-haspopup="true"><a href="{{ route('cajas.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Cajas</span></a></li>
					</ul>
				</div>
			</li>
			
			
			<li class="kt-menu__item  kt-menu__item--open kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open {{ activeMenu('usuarios') }}" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Administración</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
				<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
					<ul class="kt-menu__subnav">
						<li class="kt-menu__item {{ activeItem('usuarios') }}" aria-haspopup="true"><a href="{{ route('usuarios.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Usuarios</span></a></li>
					</ul>
				</div>
			</li>
			
		</ul>
	</div>
</div>

<!-- end: Header Menu -->