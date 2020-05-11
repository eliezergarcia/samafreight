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
					<a href="" class="kt-subheader__breadcrumbs-link ">Usuarios</a>
				</div>
			</div>

			<!-- end:: Subheader Title -->


			<!-- begin:: Sub-header toolbar -->
			<div class="kt-subheader__toolbar">
				<div class="kt-subheader__toolbar-wrapper">
					<button type="button" class="btn btn-default btn-sm btn-bold btn-upper" @click="showCreateModal()">Crear</button>
					<!-- <a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Editar</a> -->
					<!-- <a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Configuración</a>
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
					</div> -->
				</div>
			</div>

			<!-- end:: Sub-header toolbar -->
		</div>
	</div>
	<!-- end:: Subheader -->
@endsection

@section('content')
	<!--begin::Portlet-->
	<div class="kt-portlet">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">Usuarios</h3>
			</div>
		</div>
		<div class="kt-portlet__body">

			<!--begin::Section-->
			<div class="kt-section">
				<div class="kt-section__info">
					Información de usuarios
				</div>
				<div class="kt-section__content">
					<table class="table table-head-noborder">
						<thead>
							<tr>
								<th>ID</th>
								<th>Avatar</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Departamento</th>
								<th>Status</th>
								<th>Accciones</th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="user in users">
								<th v-text="user.id" scope="row"></th>
								<td>
									
								<div class="kt-user-card-v2">								
									<div class="kt-user-card-v2__pic">									
										<img alt="photo" :src="userAvatar(user)">
									</div>								
								</div>
								</td>
								<td v-text="user.first_name"></td>
								<td v-text="user.last_name"></td>
								<td v-text="user.email"></td>
								<td v-text="user.role"></td>
								<td v-if="user.inactive_at">
									<!-- <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">Inactivo</span> -->
									<span class="btn btn-bold btn-sm btn-font-sm btn-label-danger">Inactivo</span>
								</td>
								<td v-else>
									<!-- <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Activo</span> -->
									<span class="btn btn-bold btn-sm btn-font-sm btn-label-success">Activo</span>
								</td>
								<td class="kt-datatable__cell">
									<span style="overflow: visible; position: relative; width: 110px;">
										<div v-if="user.inactive_at">
											<a @click="showActivateModal(user)" class="btn btn-clean btn-icon btn-icon-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Activar">
												<i class="la la-leaf"></i>						
											</a>
										</div>
										<div v-else>
											<a @click="showEditModal(user)" class="btn btn-clean btn-icon btn-icon-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver información">
												<i class="flaticon2-expand"></i>						
											</a>
											<a @click="showDeactivateModal(user)" class="btn btn-clean btn-icon btn-icon-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Desactivar">
												<i class="la la-leaf"></i>						
											</a>
										</div>
									</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!--end::Form-->
	</div>

	<!--end::Portlet-->

@endsection

@section('modals')
    <!-- Modal Crear Usuario -->
    <div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Crear usuario</h5>
                    <button type="button" class="close" @click="closeCreateModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="first_name" class=" form-control-label">First Name</label>
                        <input type="text" v-model="first_name" name="first_name" placeholder="Ingrese el nombre..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="last_name" class=" form-control-label">Last Name</label>
                        <input type="text" v-model="last_name" name="last_name" placeholder="Ingrese el apellido..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class=" form-control-label">Email</label>
                        <input type="text" v-model="email" name="email" placeholder="Ingrese el email..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class=" form-control-label">Departamento</label>
                        <select name="role" v-model="role" class="form-control">
                        	<option value="" selected="">Selecciona...</option>
                        	<option value="Administracion">Administracion</option>
                        	<option value="Mantenimiento">Mantenimiento</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password" class=" form-control-label">Password</label>
                        <input type="password" v-model="password" name="password" placeholder="Ingrese el password..." class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-brand" @click="closeCreateModal()">Cerrar</button>
                    <button type="button" class="btn btn-brand" @click="createUser()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Modal Crear Usuario -->

    	<!-- Modal Editar Usuario -->
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Editar usuario</h5>
                    <button type="button" class="close" @click="closeEditModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" v-model="id_user">
                    <input type="hidden" v-model="method_field" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="first_name" class=" form-control-label">First Name</label>
                        <input type="text" v-model="first_name" name="first_name" placeholder="Ingrese el nombre..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="last_name" class=" form-control-label">Last Name</label>
                        <input type="text" v-model="last_name" name="last_name" placeholder="Ingrese el apellido..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class=" form-control-label">Email</label>
                        <input type="text" v-model="email" name="email" placeholder="Ingrese el email..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password_encrypted" class=" form-control-label">Password</label>
                        <input type="text" v-model="password_encrypted" name="password_encrypted" placeholder="Ingrese el password..." class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-brand" @click="closeEditModal()">Cerrar</button>
                    <button type="button" class="btn btn-brand" @click="saveUser()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Modal Editar Usuario -->

    <!-- Modal Activar Usuario -->
    <div class="modal fade" id="activateUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Activar usuario</h5>
            <button type="button" class="close" @click="closeActivateModal()" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-3 text-center">
                <i class="fas fa-exclamation-circle fa-4x"></i>
                <h4 class="heading mt-4">Estás seguro?</h4>
                <p>
                    Estás a punto de activar este usuario
                </p>
            </div>
            <input type="hidden" v-model="id_user">
            <input type="hidden" v-model="method_field" name="_method" value="POST">
          </div>
          <div class="modal-footer">
            <button type="button" @click="closeActivateModal()" class="btn btn-outline-info">Cerrar</button>
            <button type="button" class="btn btn-info" @click="activateUser()">Activar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin del Modal Activar Usuario -->

	<!-- Modal Desactivar Usuario -->
    <div class="modal fade" id="deactivateUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Desactivar usuario</h5>
            <button type="button" class="close" @click="closeDeactivateModal()" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-3 text-center">
                <i class="fas fa-exclamation-circle fa-4x"></i>
                <h4 class="heading mt-4">Estás seguro?</h4>
                <p>
                    Estás a punto de desactivar este usuario
                </p>
            </div>
            <input type="hidden" v-model="id_user">
            <input type="hidden" v-model="method_field" name="_method" value="DELETE">
          </div>
          <div class="modal-footer">
            <button type="button" @click="closeDeactivateModal()" class="btn btn-outline-danger">Cerrar</button>
            <button type="button" class="btn btn-danger" @click="deactivateUser()">Desactivar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin del Modal Desactivar Usuario -->
@endsection

@section('scripts')
	<script type="text/javascript">
		var app = new Vue({
		  	el : '#app',
		  	data : {
		    	users : [],
		    	id_user : 0,
		    	avatar: '',
		    	first_name : '',
		    	last_name : '',
		    	email : '',
		    	role : '',
		    	password : '',
		    	password_encrypted : '',
		    	method_field : '',
		    	base_url: '<?php echo url('/'); ?>'	    	
		    	
		  	},
		  	/*created () {
		  		fetch('http://localhost/codeigniter-primerospasos/Categorias/list')
		  			.then(response => response.json())
		  			.then(json => {
		  			console.log(json);	
		  		})
		  	}*/
		  	computed: {
		  		photo: function () {
				    return 
				      /*this.avatar*/
				      'Hola'
				}
		  	},
			methods: {
				userAvatar(user= []){
					return '/storage/app/' + user['avatar']
				},
		  		listUsers(){
		  			let me = this;
		  			axios.get(this.base_url + '/usuarios/listar')
			      	.then(response => {
			      		console.log(response.data);
			        	me.users = response.data;
			      	})
			      	.catch(error => {
			        	console.log(error)
			        	this.errored = true
			      	})
		  		},
		  		createUser() {
					let me = this;
					axios.post(this.base_url + '/usuarios', {
						first_name: this.first_name,
					    last_name: this.last_name,
					    email: this.email,
					    password: this.password,
					    role: this.role,

					})
				  	.then(function (response) {
					    console.log(response);
					    me.closeCreateModal();
					    me.listUsers();
					    toastr.options = {
						  "closeButton": true,
						  "debug": true,
						  "newestOnTop": true,
						  "progressBar": true,
						  "positionClass": "toast-top-right",
						  "preventDuplicates": true,
						  "showDuration": "300",
						  "hideDuration": "1000",
						  "timeOut": "5000",
						  "extendedTimeOut": "1000",
						  "showEasing": "swing",
						  "hideEasing": "linear",
						  "showMethod": "fadeIn",
						  "hideMethod": "fadeOut"
						};

						toastr.success("El usuario se registró correctamente.", "Correcto");
					})
					.catch(function (error) {
					    console.log(error);
					    me.closeCreateModal();
					    me.listUsers();
					    toastr.options = {
						  "closeButton": true,
						  "debug": true,
						  "newestOnTop": true,
						  "progressBar": true,
						  "positionClass": "toast-top-right",
						  "preventDuplicates": true,
						  "showDuration": "300",
						  "hideDuration": "1000",
						  "timeOut": "5000",
						  "extendedTimeOut": "1000",
						  "showEasing": "swing",
						  "hideEasing": "linear",
						  "showMethod": "fadeIn",
						  "hideMethod": "fadeOut"
						};

						toastr.error("Ocurrió un problema al guardar la información.", "Incorrecto");
					});
				},
		  		showCreateModal() {
		  			console.log("Hola");
					$('#createUserModal').modal('show');
				},
				closeCreateModal() {
					this.first_name = '';
					this.last_name = '';
					this.email = '';
					this.password = '';
					$('#createUserModal').modal('hide');
				},
				saveUser() {
					let me = this;
					axios.post(this.base_url + '/usuarios/' + this.id_user, {
						id_user: this.id_user,
						_method: "PUT",
						first_name: this.first_name,
					    last_name: this.last_name,
					    email: this.email,
					    password_encrypted: this.password_encrypted,
					})
				  	.then(function (response) {
					    console.log(response);
					    me.closeEditModal();
					    me.listUsers();
					    toastr.options = {
						  "closeButton": true,
						  "debug": true,
						  "newestOnTop": true,
						  "progressBar": true,
						  "positionClass": "toast-top-right",
						  "preventDuplicates": true,
						  "showDuration": "300",
						  "hideDuration": "1000",
						  "timeOut": "5000",
						  "extendedTimeOut": "1000",
						  "showEasing": "swing",
						  "hideEasing": "linear",
						  "showMethod": "fadeIn",
						  "hideMethod": "fadeOut"
						};

						toastr.success("La información del usuario se guardo correctamente.", "Correcto");
					})
					.catch(function (error) {
					    console.log(error);
					    me.closeEditModal();
					    me.listUsers();
					    toastr.options = {
						  "closeButton": true,
						  "debug": true,
						  "newestOnTop": true,
						  "progressBar": true,
						  "positionClass": "toast-top-right",
						  "preventDuplicates": true,
						  "showDuration": "300",
						  "hideDuration": "1000",
						  "timeOut": "5000",
						  "extendedTimeOut": "1000",
						  "showEasing": "swing",
						  "hideEasing": "linear",
						  "showMethod": "fadeIn",
						  "hideMethod": "fadeOut"
						};

						toastr.error("Ocurrió un problema al guardar la información.", "Incorrecto");
					});
				},
				showEditModal(user = []) {
					console.log(user['first_name']);
					this.id_user = user['id'];
					window.location = this.base_url + '/usuarios/' + this.id_user + '/edit';
					/*this.first_name = user['first_name'];
					this.last_name = user['last_name'];
					this.email = user['email'];
					this.password_encrypted = user['password_encrypted'];
					$('#editUserModal').modal('show');*/
				},
				closeEditModal() {
					this.id_user = 0;
					this.first_name = '';
					this.last_name = '';
					this.email = '';
					this.password = '';
					this.password_encrypted = '';
					$('#editUserModal').modal('hide');
				},
				deactivateUser() {
					let me = this;
					axios.post(this.base_url + '/usuarios/desactivar/' + this.id_user, {
						id_user: this.id_user,
						_method: "DELETE",
					})
				  	.then(function (response) {
					    console.log(response);
					    me.closeDeactivateModal();
					    me.listUsers();
					    toastr.options = {
						  "closeButton": true,
						  "debug": true,
						  "newestOnTop": true,
						  "progressBar": true,
						  "positionClass": "toast-top-right",
						  "preventDuplicates": true,
						  "showDuration": "300",
						  "hideDuration": "1000",
						  "timeOut": "5000",
						  "extendedTimeOut": "1000",
						  "showEasing": "swing",
						  "hideEasing": "linear",
						  "showMethod": "fadeIn",
						  "hideMethod": "fadeOut"
						};

						toastr.success("El usuario se desactivó correctamente.", "Correcto");
					})
					.catch(function (error) {
					    console.log(error);
					    me.closeDeactivateModal();
					    me.listUsers();
					    toastr.options = {
						  "closeButton": true,
						  "debug": true,
						  "newestOnTop": true,
						  "progressBar": true,
						  "positionClass": "toast-top-right",
						  "preventDuplicates": true,
						  "showDuration": "300",
						  "hideDuration": "1000",
						  "timeOut": "5000",
						  "extendedTimeOut": "1000",
						  "showEasing": "swing",
						  "hideEasing": "linear",
						  "showMethod": "fadeIn",
						  "hideMethod": "fadeOut"
						};

						toastr.error("Ocurrió un problema la guardar la información.", "Incorrecto");
					});
				},
				showDeactivateModal(user = []) {
					this.id_user = user['id'];
					this.first_name = user['first_name'];
					this.last_name = user['last_name'];
					$('#deactivateUserModal').modal('show');
				},
				closeDeactivateModal() {
					this.id_user = 0;
					this.first_name = '';
					this.last_name = '';
					$('#deactivateUserModal').modal('hide');
				},
				activateUser() {
					let me = this;
					axios.post(this.base_url + '/usuarios/activar/' + this.id_user, {
						id_user: this.id_user,
						_method: "POST",
					})
				  	.then(function (response) {
					    console.log(response);
					    me.closeActivateModal();
					    me.listUsers();
					    toastr.options = {
						  "closeButton": true,
						  "debug": true,
						  "newestOnTop": true,
						  "progressBar": true,
						  "positionClass": "toast-top-right",
						  "preventDuplicates": true,
						  "showDuration": "300",
						  "hideDuration": "1000",
						  "timeOut": "5000",
						  "extendedTimeOut": "1000",
						  "showEasing": "swing",
						  "hideEasing": "linear",
						  "showMethod": "fadeIn",
						  "hideMethod": "fadeOut"
						};

						toastr.success("El usuario se activó correctamente.", "Correcto");
					})
					.catch(function (error) {
					    console.log(error);
					    me.closeActivateModal();
					    me.listUsers();
					    toastr.options = {
						  "closeButton": true,
						  "debug": true,
						  "newestOnTop": true,
						  "progressBar": true,
						  "positionClass": "toast-top-right",
						  "preventDuplicates": true,
						  "showDuration": "300",
						  "hideDuration": "1000",
						  "timeOut": "5000",
						  "extendedTimeOut": "1000",
						  "showEasing": "swing",
						  "hideEasing": "linear",
						  "showMethod": "fadeIn",
						  "hideMethod": "fadeOut"
						};

						toastr.error("Ocurrió un problema la guardar la información.", "Incorrecto");
					});
				},
				showActivateModal(user = []) {
					this.id_user = user['id'];
					this.first_name = user['first_name'];
					this.last_name = user['last_name'];
					$('#activateUserModal').modal('show');
				},
				closeActivateModal() {
					this.id_user = 0;
					this.first_name = '';
					this.last_name = '';
					$('#activateUserModal').modal('hide');
				},
			},
			mounted() {
			    this.listUsers();
			}
		})
	</script>
@endsection
