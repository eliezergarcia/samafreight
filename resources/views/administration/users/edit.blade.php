@extends('layouts.keen')

@section('subheader')
	<!-- begin:: Subheader -->
	<div id="kt_subheader" class="kt-subheader kt-grid__item ">
		<div class="kt-container  kt-container--fluid ">
			<!-- begin:: Subheader Title -->
			<div class="kt-subheader__title">
				<button class="kt-subheader__toggler kt-subheader__toggler--left" id="kt_aside_toggler"><span></span></button>
				<div class="kt-subheader__breadcrumbs">
					<a href="" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--home">Administración</a>
					<span class="kt-subheader__breadcrumbs-separator"></span>
					<a href="{{ route('usuarios.index') }}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--home">Usuarios</a>
					<span class="kt-subheader__breadcrumbs-separator"></span>
					<a href="" class="kt-subheader__breadcrumbs-link ">Información de usuario</a>
				</div>
			</div>

			<!-- end:: Subheader Title -->


			<!-- begin:: Sub-header toolbar -->
			<!-- <div class="kt-subheader__toolbar">
				<div class="kt-subheader__toolbar-wrapper">
					<button type="button" class="btn btn-default btn-sm btn-bold btn-upper" @click="showCreateModal()">Crear</button>
					<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Editar</a>
					<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Configuración</a>
					<div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="top">
						<a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="dropdown" data-offset="0,5px" aria-haspopup="true" aria-expanded="false">
							<i class="flaticon2-add-1"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-anim">
							<ul class="kt-nav kt-nav--active-bg" id="m_nav_1" role="tablist">
								<li class="kt-nav__item">
									<a href="" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-psd"></i>
										<span class="kt-nav__link-text">Document</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a class="kt-nav__link" role="tab" id="m_nav_link_1">
										<i class="kt-nav__link-icon flaticon2-supermarket"></i>
										<span class="kt-nav__link-text">Message</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-shopping-cart"></i>
										<span class="kt-nav__link-text">Product</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a class="kt-nav__link" role="tab" id="m_nav_link_2">
										<i class="kt-nav__link-icon flaticon2-chart2"></i>
										<span class="kt-nav__link-text">Report</span>
										<span class="kt-nav__link-badge">
											<span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded">pdf</span>
										</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-sms"></i>
										<span class="kt-nav__link-text">Post</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-avatar"></i>
										<span class="kt-nav__link-text">Customer</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
 -->
			<!-- end:: Sub-header toolbar -->
		</div>
	</div>
	<!-- end:: Subheader -->
@endsection

@section('content')
	<!--Begin:: App Content-->
	<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">Información de usuario <small>edita la información del usuario</small></h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<div class="kt-portlet__head-wrapper">
						<div class="dropdown dropdown-inline">
							<button type="button" class="btn btn-label-brand btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flaticon2-gear"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<ul class="kt-nav">
									<li class="kt-nav__section kt-nav__section--first">
										<span class="kt-nav__section-text">Options</span>
									</li>
									@if($user->inactive_at)
										<div>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon la la-leaf"></i>
													<span class="kt-nav__link-text">Activar</span>
												</a>
											</li>
										</div>
									@else
										<div v-else>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon la la-leaf"></i>
													<span class="kt-nav__link-text">Desactivar</span>
												</a>
											</li>
										</div>
									@endif	
									<!-- <li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon la la-copy"></i>
											<span class="kt-nav__link-text">Copy</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon la la-file-excel-o"></i>
											<span class="kt-nav__link-text">Excel</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon la la-file-text-o"></i>
											<span class="kt-nav__link-text">CSV</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon la la-file-pdf-o"></i>
											<span class="kt-nav__link-text">PDF</span>
										</a>
									</li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<form method="POST" action="{{ route('usuarios.update', $user->id) }}" enctype="multipart/form-data" class="kt-form kt-form--label-right">				
				{!! csrf_field() !!}
            	{!! method_field('PUT') !!}
				<div class="kt-portlet__body">
					<div class="kt-section kt-section--first">
						<div class="kt-section__body">
							<div class="row">
								<label class="col-xl-3"></label>
								<div class="col-lg-9 col-xl-6">
									<h3 class="kt-section__title kt-section__title-sm">Customer Info:</h3>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
								<div class="col-lg-9 col-xl-6">
									<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_profile_avatar">
										<div class="kt-avatar__holder" style="background-image: url('{{ Storage::url(Auth::user()->url) }}');"></div>
										<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
											<i class="fa fa-pen"></i>
											<input type="file" name="avatar">
										</label>
										<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
											<i class="fa fa-times"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
								<div class="col-lg-9 col-xl-6">
									<input class="form-control" type="text" name="first_name" value="{{ $user->first_name }}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
								<div class="col-lg-9 col-xl-6">
									<input class="form-control" type="text" name="last_name" value="{{ $user->last_name }}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
								<div class="col-lg-9 col-xl-6">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="la la-at"></i>
											</span>
										</div>
										<input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email" aria-describedby="basic-addon1">
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-xl-3 col-lg-3 col-form-label">Password</label>
								<div class="col-lg-9 col-xl-6">
									<input class="form-control" type="text" name="password_encrypted" value="{{ $user->password_encrypted }}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-xl-3 col-lg-3 col-form-label">Department(s)</label>
								<div class="col-lg-9 col-xl-6">
									<input class="form-control" type="text" value="{{ $user->role }}">
								</div>
							</div>
							<div class="row">
								<label class="col-xl-3"></label>
								<div class="col-lg-9 col-xl-6">
									<h3 class="kt-section__title kt-section__title-sm">Contact Info:</h3>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-xl-3 col-lg-3 col-form-label">User name</label>
								<div class="col-lg-9 col-xl-6">
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
										<input type="text" class="form-control" name="user_name" value="{{ $user->user_name }}" placeholder="User name" aria-describedby="basic-addon1">
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
								<div class="col-lg-9 col-xl-6">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="la la-phone"></i>
											</span>
										</div>
										<input type="text" class="form-control" name="contact_phone" value="{{ $user->contact_phone }}" placeholder="Phone" aria-describedby="basic-addon1">
									</div>
								</div>
							</div>
							<div class="form-group form-group-last row">
								<label class="col-xl-3 col-lg-3 col-form-label">Birthday date</label>
								<div class="col-lg-9 col-xl-6">
									<div class="input-group date">
										<div class="input-group-prepend">
											<span class="input-group-text">
											<i class="la la-calendar glyphicon-th"></i>
											</span>
										</div>
										<input type="date" class="form-control" name="birthday_date" value="{{ $user->birthday_date }}" placeholder="Select date" id="kt_datetimepicker_6">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<div class="row">
							<div class="col-lg-3 col-xl-3">
							</div>
							<div class="col-lg-9 col-xl-9">
								<button type="submit" class="btn btn-success">Guardar</button>&nbsp;
								<button type="reset" class="btn btn-secondary">Cancelar</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!--End:: App Content-->

@endsection

@section('modals')
    
@endsection

@section('scripts')
	<script type="text/javascript">
		@if(session()->has('info'))
			toastr.success("{{ session('info') }}", "Correcto");
            /*$.NotificationApp.send("Bien hecho!", "{{ session('info') }}", 'top-right', 'rgba(0,0,0,0.2)', 'success');*/
        @endif
	</script>
@endsection
