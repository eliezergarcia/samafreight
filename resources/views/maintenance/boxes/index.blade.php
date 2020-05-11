@extends('layouts.keen')

@section('subheader')
	<!-- begin:: Subheader -->
	<div id="kt_subheader" class="kt-subheader kt-grid__item ">
		<div class="kt-container  kt-container--fluid ">
			<!-- begin:: Subheader Title -->
			<div class="kt-subheader__title">
				<button class="kt-subheader__toggler kt-subheader__toggler--left" id="kt_aside_toggler"><span></span></button>
				<div class="kt-subheader__breadcrumbs">
					<a href="" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--home">Mantenimiento</a>
					<span class="kt-subheader__breadcrumbs-separator"></span>
					<a href="" class="kt-subheader__breadcrumbs-link ">Cajas</a>
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
				<h3 class="kt-portlet__head-title">Cajas</h3>
			</div>
		</div>
		<div class="kt-portlet__body">

			<!--begin::Section-->
			<div class="kt-section">
				<div class="kt-section__info">
					Información de cajas
				</div>
				<div class="kt-section__content">
					<table class="table table-head-noborder" id="boxesTable">
						<thead>
							<tr>
								<th>ID</th>
								<th>Remolque</th>
								<th>Tipo</th>
								<th>Marca</th>
								<th>Serie</th>
								<th>Placas</th>
								<th>Año</th>
								<th>Status</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="box in boxes">
								<th v-text="box.id" scope="row"></th>
								<td v-text="box.trailer"></td>								
								<td v-text="box.type.name"></td>								
								<td v-text="box.brand.name"></td>								
								<td v-text="box.serie"></td>
								<td v-text="box.plates"></td>
								<td v-if="box.year === 0">PTE</td>
								<td v-else v-text="box.year"></td>
								<!-- <td v-if="truck.weight == '0.00'">PTE</td>
								<td v-else v-text="truck.weight"></td>
								<td v-if="truck.service.id === 1">
									<span class="kt-badge kt-badge--warning kt-badge--inline" v-text="truck.service.name"></span>
								</td>							
								<td v-if="truck.service.id === 2">
									<span class="kt-badge kt-badge--primary kt-badge--inline" v-text="truck.service.name"></span>
								</td>							
								<td v-if="truck.service.id === 3">
									<span class="kt-badge kt-badge--brand kt-badge--inline" v-text="truck.service.name"></span>
								</td> -->								
								<td v-if="box.inactive_at">
									<span class="kt-badge kt-badge--danger kt-badge--dot"></span>
									<span class="kt-font-bold kt-font-danger">Inactivo</span>
								</td>
								<td v-else>
									<span class="kt-badge kt-badge--success kt-badge--dot"></span>
									<span class="kt-font-bold kt-font-success">Activo</span>
								</td>

								<td v-if="box.inactive_at">
									<div class="dropdown dropdown-inline">
										<button type="button" class="btn btn-clean btn-icon btn-sm btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="flaticon2-gear"></i>
										</button>
										<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(31px, 32px, 0px);">
											<!-- <a class="dropdown-item" href="#" @click="showEditModal(box)"><i class="la la-edit"></i> Editar información</a> -->
											<a class="dropdown-item" href="#" @click="showActivateModal(box)"><i class="la la-leaf"></i> Activar caja</a>
											<!-- <a class="dropdown-item" href="#"><i class="la la-print"></i> Generar reporte</a> -->
											<!-- <div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a> -->
										</div>
									</div>
								</td>
								<td v-else>
									<a @click="showBoxInformationModal(box)" class="btn btn-sm btn-clean btn-icon btn-icon-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver detalles">		
										<i class="flaticon2-expand"></i>						
									</a>
									<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-clean btn-icon btn-sm btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="flaticon-more-1"></i>
											</button>
										<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(31px, 32px, 0px);">
											<a class="kt-nav__link dropdown-item" href="#" @click="showInspeccionDiarioModal(box)">
												<i class="kt-nav__link-icon flaticon-clipboard"></i> 
												<span class="kt-nav__link-text">Inspección diario</span>
											</a>
											<a class="dropdown-item" href="#" @click="showMantenimientoPreventivoModal(box)">
												<i class="flaticon-clipboard"></i> 
												Matenimiento Preventivo
											</a>
											<a class="dropdown-item" href="#" @click="showMovimientoModal(box)">
												<i class="flaticon-clipboard"></i> 
												Generar movimiento
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#" @click="showEditModal(box)"><i class="la la-edit"></i> Editar información</a>
											<a class="dropdown-item" href="#" @click="showDeactivateModal(box)"><i class="la la-leaf"></i> Desactivar caja</a>
											<!-- <div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">
												<i class="la la-print"></i> 
												Generar reporte
											</a> -->
											<!-- <a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a> -->
										</div>
									</div>
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
 	<!-- Modal Crear Caja -->
    <div class="modal fade" id="createBoxModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Ingresar información de caja</h5>
                    <button type="button" class="close" @click="closeCreateModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" v-model="id_box">
                    <input type="hidden" v-model="method_field" name="_method" value="PUT">
                    <div class="form-group row">
                    	<div class="col-lg-4">
	                        <label for="trailer" class=" form-control-label">Remolque:</label>
	                        <input type="text" v-model="trailer" name="trailer" placeholder="Ingrese el número de trailer..." class="form-control">
	                        <span class="form-text text-muted">Porfavor ingresa el número</span>
                    	</div>
                    	<div class="col-lg-4">
	                        <label for="type" class=" form-control-label">Tipo:</label>
	                        <!-- <input type="text" v-model="type" name="type" placeholder="Ingrese el tipo..." class="form-control"> -->
	                        <select class="form-control" name="type" id="type_create">
								<option v-for="type in types" 
										:value="type.id"
										v-text="type.name">
								</option>
								<option selected>Seleccionar...</option>
							</select>
							<span class="form-text text-muted">Porfavor selecciona el tipo</span>
                    	</div>
                    	<div class="col-lg-4">
	                        <label for="brand" class=" form-control-label">Marca</label>
	                        <select class="form-control" name="brand" id="brand_create">
								<option v-for="brand in brands" 
										:value="brand.id" 
										v-text="brand.name">
								</option>
								<option selected>Seleccionar...</option>
							</select>
							<span class="form-text text-muted">Porfavor selecciona la marca</span>
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<div class="col-lg-4">
	                        <label for="serie" class=" form-control-label">Serie</label>
	                        <input type="text" v-model="serie" name="serie" placeholder="Ingrese la serie..." class="form-control">
	                        <span class="form-text text-muted">Porfavor ingresa la serie</span>
                    	</div>
                    	<div class="col-lg-4">
	                        <label for="plates" class=" form-control-label">Placas</label>
	                        <input type="text" v-model="plates" name="plates" placeholder="Ingrese las placas..." class="form-control">
	                        <span class="form-text text-muted">Porfavor ingresa las placas</span>
                    	</div>
                    	<div class="col-lg-4">
	                        <label for="year" class=" form-control-label">Año</label>
	                        <input type="text" v-model="year" name="year" placeholder="Ingrese el año..." class="form-control">
	                        <span class="form-text text-muted">Porfavor ingresa el año</span>
                    	</div>
                   	</div>
                </div>
                <div class="modal-footer kt-portlet__foot kt-portlet__foot--solid">
                    <button type="button" class="btn btn-outline-brand" @click="closeCreateModal()">Cerrar</button>
                    <button type="button" class="btn btn-brand" @click="createBox()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Modal Crear Caja -->

    <!-- Modal Generar revisión -->
    <div class="modal fade" id="revisionTruckModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Insepección de tractor</h5>
                    <button type="button" class="close" @click="closeRevisionModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                    	<div class="col-lg-6">
	                        <label for="name" class=" form-control-label">Fecha</label>
	                        <input type="text" name="name" placeholder="Ingrese el nombre..." class="form-control">
                    	</div>
                    	<div class="col-lg-6">
	                        <label for="last_name" class=" form-control-label">Nombre del chofer</label>
	                        <input type="text" name="last_name" placeholder="Ingrese el apellido..." class="form-control">
                    	</div>
                    </div>
                    <!-- <div class="form-group row">
                    	<div class="col-lg-4">
                    		<div class="form-grou row">
                    			<div class="col-lg-4">
                    				<select class="form-control kt_selectpicker">
										<option value="1">
											<a class="btn btn-sm btn-clean btn-icon btn-icon-sm">
												<i class="flaticon2-check-mark"></i>
											</a>
										</option>
									</select>
                    			</div>
                    			<label for="example-text-input" class="col-8 col-form-label">Full Name:</label>
                    		</div>
                    	</div>
                    	<div class="col-lg-4">
                    		<div class="form-grou row">
                    			<div class="col-lg-4">
                    				<select class="form-control">
										<option></option>
									</select>
                    			</div>
                    			<label for="example-text-input" class="col-8 col-form-label">Full Name:</label>
                    		</div>
                    	</div>
                    	<div class="col-lg-4">
                    		<div class="form-grou row">
                    			<div class="col-lg-4">
                    				<select class="form-control">
										<option></option>
									</select>
                    			</div>
                    			<label for="example-text-input" class="col-8 col-form-label">Full Name:</label>
                    		</div>
                    	</div>
                    </div> -->
                    <table class="table table-head-noborder table-sm">
						<thead>
							<tr>
								<th>ID</th>
								<th>
									<a class="btn btn-outline-success btn-elevate btn-circle btn-icon btn-sm">
										<i class="flaticon2-check-mark"></i>
									</a>
								</th>
								<th>
									<a class="btn btn-outline-danger btn-elevate btn-circle btn-icon btn-sm">
										<i class="flaticon2-delete"></i>
									</a>
								</th>
								<th>
									<a class="btn btn-outline-info btn-elevate btn-circle btn-icon btn-sm">
										<i class="flaticon2-line"></i>
									</a>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="inspectionPoint in inspectionPoints" v-if="inspectionPoint.type === 'TRUCK'">
								<div>
									<td scope="row" v-text="inspectionPoint.point_name"></td>
									<td>
										<label class="kt-radio kt-radio--tick kt-radio--success">
											<input type="radio" :name="inspectionPoint.id" value="1"> <br>
											<span></span>
										</label>
									</td>
									<td>
										<label class="kt-radio kt-radio--tick kt-radio--danger">
											<input type="radio" :name="inspectionPoint.id" value="2"> <br>
											<span></span>
										</label>
									</td>
									<td>
										<label class="kt-radio kt-radio--tick kt-radio--info">
											<input type="radio" :name="inspectionPoint.id" value="3"> <br>
											<span></span>
										</label>
									</td>
								</div>
							</tr>
						</tbody>
					</table>
                    <div class="form-group row">
                    	<div class="col-lg-6">
	                        <label for="email" class=" form-control-label">Número de caja</label>
	                        <input type="text" name="email" placeholder="Ingrese el número de caja..." class="form-control">
	                    </div>
                    </div>
                    <table class="table table-head-noborder table-sm">
						<thead>
							<tr>
								<th>ID</th>
								<th>
									<a class="btn btn-outline-success btn-elevate btn-circle btn-icon btn-sm">
										<i class="flaticon2-check-mark"></i>
									</a>
								</th>
								<th>
									<a class="btn btn-outline-danger btn-elevate btn-circle btn-icon btn-sm">
										<i class="flaticon2-delete"></i>
									</a>
								</th>
								<th>
									<a class="btn btn-outline-info btn-elevate btn-circle btn-icon btn-sm">
										<i class="flaticon2-line"></i>
									</a>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="inspectionPoint in inspectionPoints" v-if="inspectionPoint.type === 'CAJA'">
								<div>
									<td scope="row" v-text="inspectionPoint.point_name"></td>
									<td>
										<label class="kt-radio kt-radio--tick kt-radio--success">
											<input type="radio" :name="inspectionPoint.id" value="1"> <br>
											<span></span>
										</label>
									</td>
									<td>
										<label class="kt-radio kt-radio--tick kt-radio--danger">
											<input type="radio" :name="inspectionPoint.id" value="2"> <br>
											<span></span>
										</label>
									</td>
									<td>
										<label class="kt-radio kt-radio--tick kt-radio--info">
											<input type="radio" :name="inspectionPoint.id" value="3"> <br>
											<span></span>
										</label>
									</td>
								</div>
							</tr>
						</tbody>
					</table>
                    <div class="form-group">
                        <label for="password" class=" form-control-label">Firma de coordinador Sama</label>
                        <input type="password" name="password" placeholder="Ingrese el password..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class=" form-control-label">Firma de guardia Sama</label>
                        <input type="password" name="password" placeholder="Ingrese el password..." class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-brand" @click="closeRevisionModal()">Cerrar</button>
                    <button type="button" class="btn btn-brand" @click="createUser()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Modal Generar revisión -->

    <!-- Modal Mantenimiento Preventivo -->
    <div class="modal fade" id="mantenimientoPreventivoModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    	<form method="POST" id="mantenimientoPreventivoForm" action="{{ route('mantenimientos.store') }}" class="kt-form kt-form--label-right">				
			{!! csrf_field() !!}
			<input type="hidden" name="box_id" id="box_id">
			<input type="hidden" name="truck_id" id="truck_id">
	        <div class="modal-dialog modal-lg" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="modal-title" id="mediumModalLabel">Mantenimiento Preventivo</h5>
	                    <button type="button" class="close" @click="closeMantenimientoPreventivoModal()" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <div class="modal-body">
	                    <div class="form-group row">
	                    	<div class="col-lg-6">
		                        <label for="name" class=" form-control-label">Fecha <span class="text-danger">*</span></label>
		                        <input type="date" name="date" placeholder="Ingrese la fecha..." class="form-control form-control-sm" required>
		                        <span class="form-text text-muted">Porfavor ingrese la fecha</span>
	                    	</div>
	                    	<div class="col-lg-6">
		                        <label for="last_name" class=" form-control-label">Nombre del chofer <span class="text-danger">*</span></label>
		                        <select class="form-control form-control-sm" name="driver_id" id="driver_id" @change="findPlates()" required>
									<option v-for="driver in drivers" 
											:value="driver.id"
											v-text="driver.first_name">
									</option>
									<option selected>Seleccionar...</option>
								</select>
								<span class="form-text text-muted">Porfavor seleccione el chofer</span>
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                    	<div class="col-lg-6">
		                        <label for="unit_number" class=" form-control-label">Número de unidad/Unit number <span class="text-danger">*</span></label>
		                        <select class="form-control form-control-sm" name="truck_id" id="unit_number" @change="findPlates()" required>
									<option selected>Seleccionar...</option>
									<option v-for="truck in trucks" 
											:value="truck.id"
											v-text="truck.number">
									</option>
								</select>
		                        <span class="form-text text-muted">Porfavor selecciona el número de unidad</span>
	                    	</div>
	                    </div>
	                    <!-- <div class="form-group row">
	                    	<div class="col-lg-4">
	                    		<div class="form-grou row">
	                    			<div class="col-lg-4">
	                    				<select class="form-control kt_selectpicker">
											<option value="1">
												<a class="btn btn-sm btn-clean btn-icon btn-icon-sm">
													<i class="flaticon2-check-mark"></i>
												</a>
											</option>
										</select>
	                    			</div>
	                    			<label for="example-text-input" class="col-8 col-form-label">Full Name:</label>
	                    		</div>
	                    	</div>
	                    	<div class="col-lg-4">
	                    		<div class="form-grou row">
	                    			<div class="col-lg-4">
	                    				<select class="form-control">
											<option></option>
										</select>
	                    			</div>
	                    			<label for="example-text-input" class="col-8 col-form-label">Full Name:</label>
	                    		</div>
	                    	</div>
	                    	<div class="col-lg-4">
	                    		<div class="form-grou row">
	                    			<div class="col-lg-4">
	                    				<select class="form-control">
											<option></option>
										</select>
	                    			</div>
	                    			<label for="example-text-input" class="col-8 col-form-label">Full Name:</label>
	                    		</div>
	                    	</div>
	                    </div> -->
	                   <!--  <table class="table table-head-noborder table-sm">
							<thead>
								<tr>
									<th>ID</th>
									<th>
										<a class="btn btn-outline-success btn-elevate btn-circle btn-icon btn-sm">
											<i class="flaticon2-check-mark"></i>
										</a>
									</th>
									<th>
										<a class="btn btn-outline-danger btn-elevate btn-circle btn-icon btn-sm">
											<i class="flaticon2-delete"></i>
										</a>
									</th>
									<th>
										<a class="btn btn-outline-info btn-elevate btn-circle btn-icon btn-sm">
											<i class="flaticon2-line"></i>
										</a>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr v-for="inspectionPoint in inspectionPoints" v-if="inspectionPoint.type === 'TRUCK'">
									<div>
										<td scope="row" v-text="inspectionPoint.point_name"></td>
										<td>
											<label class="kt-radio kt-radio--tick kt-radio--success">
												<input type="radio" :name="inspectionPoint.id" value="1"> <br>
												<span></span>
											</label>
										</td>
										<td>
											<label class="kt-radio kt-radio--tick kt-radio--danger">
												<input type="radio" :name="inspectionPoint.id" value="2"> <br>
												<span></span>
											</label>
										</td>
										<td>
											<label class="kt-radio kt-radio--tick kt-radio--info">
												<input type="radio" :name="inspectionPoint.id" value="3"> <br>
												<span></span>
											</label>
										</td>
									</div>
								</tr>
							</tbody>
						</table> -->
						<div class="form-group row">
	                    	<div v-for="(inspectionPoint, index) in inspectionPoints" v-if="inspectionPoint.type === 'TRUCK'" class="col-lg-4">
	                    		<div class="form-group row">
		                    		<div class="col-lg-7">
		                    			<select class="form-control form-control-sm" name="point_truck[]" id="point_truck" required>
		                    				<option value="" selected>Selecciona...</option>
											<option value="1">Buen estado</option>
											<option value="2">Mal estado</option>
											<option value="3">No aplica</option>
										</select>
		                    		</div>                    		
									<div class="col-lg-5 col-form-label">
			                        	<label for="point_truck" class=" form-control-label">
			                        		@{{ inspectionPoint.point_name }}
			                        	</label>
		                    		</div>
	                    		</div>
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                    	<div class="col-lg-6">
		                        <label for="email" class=" form-control-label">Número de caja <span class="text-danger">*</span></label>
		                        <input type="text" class="form-control form-control-sm" name="trailer_number" id="trailer_number" required>
		                        <!-- <select class="form-control form-control-sm" name="box_id" id="box_id" required>
									<option selected>Seleccionar...</option>
									<option v-for="box in boxes" 
											:value="box.id"
											v-text="box.trailer">
									</option>
								</select> -->
								<span class="form-text text-muted">Porfavor selecciona la caja</span>
		                    </div>
	                    </div>
	                    <!-- <table class="table table-head-noborder table-sm">
							<thead>
								<tr>
									<th>ID</th>
									<th>
										<a class="btn btn-outline-success btn-elevate btn-circle btn-icon btn-sm">
											<i class="flaticon2-check-mark"></i>
										</a>
									</th>
									<th>
										<a class="btn btn-outline-danger btn-elevate btn-circle btn-icon btn-sm">
											<i class="flaticon2-delete"></i>
										</a>
									</th>
									<th>
										<a class="btn btn-outline-info btn-elevate btn-circle btn-icon btn-sm">
											<i class="flaticon2-line"></i>
										</a>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr v-for="inspectionPoint in inspectionPoints" v-if="inspectionPoint.type === 'CAJA'">
									<div>
										<td scope="row" v-text="inspectionPoint.point_name"></td>
										<td>
											<label class="kt-radio kt-radio--tick kt-radio--success">
												<input type="radio" :name="inspectionPoint.id" value="1"> <br>
												<span></span>
											</label>
										</td>
										<td>
											<label class="kt-radio kt-radio--tick kt-radio--danger">
												<input type="radio" :name="inspectionPoint.id" value="2"> <br>
												<span></span>
											</label>
										</td>
										<td>
											<label class="kt-radio kt-radio--tick kt-radio--info">
												<input type="radio" :name="inspectionPoint.id" value="3"> <br>
												<span></span>
											</label>
										</td>
									</div>
								</tr>
							</tbody>
						</table> -->
						<div class="form-group row">
	                    	<div v-for="(inspectionPoint, index) in inspectionPoints" v-if="inspectionPoint.type === 'TRAILER'" class="col-lg-4">
	                    		<div class="form-group row">
		                    		<div class="col-lg-7">
		                    			<select class="form-control form-control-sm" name="point_trailer[]" id="point_inspection_value" required>
		                    				<option value="" selected>Selecciona...</option>
											<option value="1">Buen estado</option>
											<option value="2">Mal estado</option>
											<option value="3">No aplica</option>
										</select>
		                    		</div>                    		
									<div class="col-lg-5 col-form-label">
			                        	<label for="" class=" form-control-label">
			                        		@{{ inspectionPoint.point_name }}
			                        	</label>
		                    		</div>
	                    		</div>
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                		<div class="col-lg-3">
	                			<select class="form-control form-control-sm" name="vehicle_conditions" id="">
	                				<option value="" selected> Selecciona...</option>
									<option value="1">Buen estado</option>
									<option value="2">Mal estado</option>
									<option value="3">No aplica</option>
								</select>
	                		</div>                    		
							<div class="col-lg-9 col-form-label">
	                        	<label for="" class=" form-control-label">
	                        		Las condiciones anteriores del vehículo son satisfactorias
	                        	</label>
	                		</div>
	            		</div>
	            		<div class="form-group row">
	                    	<div class="col-lg-6">
		                        <label for="firm_conductor" class=" form-control-label">Conductor <span class="text-danger">*</span></label>
		                        <select class="form-control form-control-sm" name="firm_conductor" id="firm_conductor" @change="findPlates()" required>
									<option v-for="driver in drivers" 
											:value="driver.id"
											v-text="driver.first_name">
									</option>
									<option selected>Seleccionar...</option>
								</select>
		                        <span class="form-text text-muted">Porfavor selecciona el conductor</span>
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                		<div class="col-lg-3">
	                			<select class="form-control form-control-sm" name="defect_correcteds" id="">
	                				<option value="" selected> Selecciona...</option>
									<option value="1">Buen estado</option>
									<option value="2">Mal estado</option>
									<option value="3">No aplica</option>
								</select>
	                		</div>                    		
							<div class="col-lg-9 col-form-label">
	                        	<label for="" class=" form-control-label">
	                        		Los defectos de arriba fueron corregidos
	                        	</label>
	                		</div>
	            		</div>
	                    <div class="form-group row">
	                    	<div class="col-lg-6">
	                        	<label for="firm_mechanic" class=" form-control-label">Mecánico Sama <span class="text-danger">*</span></label>
	                        	<select class="form-control form-control-sm" name="firm_mechanic" id="firm_mechanic" @change="findPlates()" required>
									<option selected>Seleccionar...</option>
									<option v-for="mechanic in mechanics" 
											:value="mechanic.id"
											v-text="mechanic.first_name">
									</option>
								</select>
	                        	<span class="form-text text-muted">Porfavor selecciona el mecánico</span>
	                    	</div>
	                    	<div class="col-lg-6">
		                        <label for="firm_coordinator" class=" form-control-label">Coordinador Sama <span class="text-danger">*</span></label>
		                        <select class="form-control form-control-sm" name="firm_coordinator" id="firm_coordinator" @change="findPlates()" required>
									<option selected>Seleccionar...</option>
									<option v-for="coordinator in coordinators" 
											:value="coordinator.id"
											v-text="coordinator.first_name">
									</option>
								</select>
		                        <span class="form-text text-muted">Porfavor selecciona el coordinador</span>
	                    	</div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-outline-brand" @click="closeMantenimientoPreventivoModal()">Cerrar</button>
	                    <button type="submit" class="btn btn-brand">Guardar</button>
	                </div>
	            </div>
	        </div>
	    </form>
    </div>
    <!-- Fin de Modal Mantenimiento Preventivo -->

    <!-- Modal Inspeccion Diario -->
    <div class="modal fade" id="inspeccionDiarioModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    	<form method="POST" action="{{ route('inspecciones.store') }}" class="kt-form kt-form--label-right">				
			{!! csrf_field() !!}
			<input type="hidden" name="box_id" id="box_id">
	        <div class="modal-dialog modal-lg" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="modal-title" id="mediumModalLabel">Inspección diario</h5>
	                    <button type="button" class="close" @click="closeInspeccionDiarioModal()" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <div class="modal-body">
	                    <div class="form-group row">
	                    	<div class="col-lg-6">
		                        <label for="name" class=" form-control-label">Name/Nombre <span class="text-danger">*</span></label>
		                        <input type="text" name="name" placeholder="Ingrese el name/nombre..." class="form-control form-control-sm" required>
		                        <span class="form-text text-muted">Porfavor ingrese el nombre</span>
	                    	</div>
	                    	<div class="col-lg-6">
		                        <label for="date" class=" form-control-label">Fecha/Date <span class="text-danger">*</span></label>
		                        <input type="date" name="date" placeholder="Ingrese la fecha/date..." class="form-control form-control-sm" required>
		                        <span class="form-text text-muted">Porfavor ingrese la fecha</span>
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                    	<div class="col-lg-6">
		                        <label for="unit_number" class=" form-control-label">Número de unidad/Unit number <span class="text-danger">*</span></label>
		                        <!-- <input type="text" name="unit_number" id="unit_number" placeholder="Ingrese el número de unidad/unit number..." class="form-control form-control-sm" required> -->
		                        <select class="form-control form-control-sm" name="truck_id" id="unit_number" @change="findPlates()" required>
									<option selected>Seleccionar...</option>
									<option v-for="truck in trucks" 
											:value="truck.id"
											v-text="truck.number">
									</option>
								</select>
		                        <span class="form-text text-muted">Porfavor selecciona el número de unidad</span>
	                    	</div>
	                    	<div class="col-lg-6">
		                        <label for="unit_plates" class=" form-control-label">Placas/Plates <span class="text-danger">*</span></label>
		                        <input type="text" name="unit_plates" id="unit_plates" placeholder="Ingrese las placas/plates..." class="form-control form-control-sm" required>
		                        <span class="form-text text-muted">Porfavor ingrese las placas</span>
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                    	<div class="col-lg-6">
		                        <label for="trailer" class=" form-control-label">Número de caja/Trailer number <span class="text-danger">*</span></label>
		                        <!-- <input type="text" name="trailer_number" id="trailer_number" placeholder="Ingrese el número de caja/trailer number..." class="form-control form-control-sm"> -->
		                        <input type="text" name="trailer_number" id="trailer_number" placeholder="Ingrese el número de unidad/unit number..." class="form-control form-control-sm" required>
		                        <!-- <select class="form-control form-control-sm" name="box_id" id="trailer_number" @change="findPlates()" required>
									<option selected>Seleccionar...</option>
									<option v-for="box in boxes" 
											:value="box.id"
											v-text="box.trailer">
									</option>
								</select> -->
								<span class="form-text text-muted">Porfavor ingresa el número de caja</span>
	                    	</div>
	                    	<div class="col-lg-6">
		                        <label for="trailer_plates" class=" form-control-label">Placas/Plates <span class="text-danger">*</span></label>
		                        <input type="text" name="trailer_plates" id="trailer_plates" placeholder="Ingrese las placas/plates..." class="form-control form-control-sm" required>
		                        <span class="form-text text-muted">Porfavor ingrese las placas</span>
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                    	<div class="col-lg-12">
	                    		<a href="#" class="">
	                            	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                            	<img src="{{ asset('assets/media/inspections/pointstruck.png') }}" alt="image" width="80%">
	                        	</a>
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                    	<div v-for="(inspectionPoint, index) in inspectionPoints" v-if="inspectionPoint.type === 'TRUCK & TRAILER'" class="col-lg-6">
	                    		<div class="form-group row">
		                    		<div class="col-lg-5">
		                    			<select class="form-control form-control-sm" name="points_inspection[]" id="point_inspection_value" required>
		                    				<option value="">Selecciona...</option>
											<option value="1">Buen estado</option>
											<option value="2">Mal estado</option>
											<option value="3">No aplica</option>
										</select>
		                    		</div>                    		
									<div class="col-lg-7 col-form-label">
			                        	<label for="trailer_plates" class=" form-control-label">
			                        		@{{ index }}. @{{ inspectionPoint.point_name }}
			                        	</label>
		                    		</div>
	                    		</div>
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                    	<div class="col-lg-6">
		                        <label for="trailer" class=" form-control-label">Conductor/Driver <span class="text-danger">*</span></label>
		                        <!-- <input type="text" name="trailer_number" id="trailer_number" placeholder="Ingrese el número de caja/trailer number..." class="form-control form-control-sm"> -->
		                        <select class="form-control form-control-sm" name="driver_id" id="driver_id" @change="findPlates()" required>
									<option selected>Seleccionar...</option>
									<option v-for="driver in drivers" 
											:value="driver.id"
											v-text="driver.first_name">
									</option>
								</select>
								<span class="form-text text-muted">Porfavor selecciona el conductor</span>
	                    	</div>
	                    	<div class="col-lg-6">
		                        <label for="trailer" class=" form-control-label">Coordiandor/Coordinator <span class="text-danger">*</span></label>
		                        <!-- <input type="text" name="trailer_number" id="trailer_number" placeholder="Ingrese el número de caja/trailer number..." class="form-control form-control-sm"> -->
		                        <select class="form-control form-control-sm" name="coordinator_id" id="coordinator_id" @change="findPlates()" required>
									<option selected>Seleccionar...</option>
									<option v-for="coordinator in coordinators" 
											:value="coordinator.id"
											v-text="coordinator.first_name">
									</option>
								</select>
								<span class="form-text text-muted">Porfavor selecciona el coordinador</span>
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                    	<div class="col-lg-12">
		                        <label for="comments" class=" form-control-label">Comentarios/Comments</label>
		                        <textarea class="form-control" name="comments" id="comments" rows="3"></textarea>
	                    	</div>
	                    	<span class="form-text text-muted">Ingresa comentarios si es necesario</span>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-outline-brand" @click="closeInspeccionDiarioModal()">Cerrar</button>
	                    <button type="submit" class="btn btn-brand">Guardar</button>
	                </div>
	            </div>
	        </div>
	    </form>
    </div>
    <!-- Fin de Modal Inspeccion Diario -->

    <!-- Modal Editar Información de la Caja -->
    <div class="modal fade" id="editBoxModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Editar información de la caja</h5>
                    <button type="button" class="close" @click="closeEditModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" v-model="id_box">
                    <input type="hidden" v-model="method_field" name="_method" value="PUT">
                    <div class="form-group row">
                    	<div class="col-lg-4">
	                        <label for="trailer" class=" form-control-label">Remolque:</label>
	                        <input type="text" v-model="trailer" name="trailer" placeholder="Ingrese el número..." class="form-control">
	                        <span class="form-text text-muted">Porfavor ingresa el número</span>
                    	</div>
                    	<div class="col-lg-4">
	                        <label for="type" class=" form-control-label">Tipo:</label>
	                        <!-- <input type="text" v-model="type" name="type" placeholder="Ingrese el tipo..." class="form-control"> -->
	                        <select class="form-control" name="type" id="type_edit">
								<option v-for="type in types" 
										:value="type.id"
										v-text="type.name"
										:selected="type.id == box.type_id ? 'selected' : ''">
								</option>
							</select>
							<span class="form-text text-muted">Porfavor selecciona el tipo</span>
                    	</div>
                    	<div class="col-lg-4">
	                        <label for="brand" class=" form-control-label">Marca</label>
	                        <select class="form-control" name="brand" id="brand_edit">
								<option v-for="brand in brands" 
										:value="brand.id" 
										v-text="brand.name" 
										:selected="brand.id == box.brand_id">
								</option>
							</select>
							<span class="form-text text-muted">Porfavor selecciona la marca</span>
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<div class="col-lg-4">
	                        <label for="serie" class=" form-control-label">Serie</label>
	                        <input type="text" v-model="serie" name="serie" placeholder="Ingrese la serie..." class="form-control">
	                        <span class="form-text text-muted">Porfavor ingresa la serie</span>
                    	</div>
                    	<div class="col-lg-4">
	                        <label for="plates" class=" form-control-label">Placas</label>
	                        <input type="text" v-model="plates" name="plates" placeholder="Ingrese las placas..." class="form-control">
	                        <span class="form-text text-muted">Porfavor ingresa las placas</span>
                    	</div>
                    	<div class="col-lg-4">
	                        <label for="year" class=" form-control-label">Año</label>
	                        <input type="text" v-model="year" name="year" placeholder="Ingrese el año..." class="form-control">
	                        <span class="form-text text-muted">Porfavor ingresa el año</span>
                    	</div>
                    </div>
                </div>
                <div class="modal-footer kt-portlet__foot kt-portlet__foot--solid">
                    <button type="button" class="btn btn-outline-brand" @click="closeEditModal()">Cerrar</button>
                    <button type="button" class="btn btn-brand" @click="saveBox()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Modal Editar Información de Tractor -->

    <!-- Modal Activar Tractor -->
    <div class="modal fade" id="activateBoxModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Activar caja</h5>
            <button type="button" class="close" @click="closeActivateModal()" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-3 text-center">
                <i class="fas fa-exclamation-circle fa-4x"></i>
                <h4 class="heading mt-4">Estás seguro?</h4>
                <p>
                    Estás a punto de activar esta caja
                </p>
            </div>
            <input type="hidden" v-model="id_box">
            <input type="hidden" v-model="method_field" name="_method" value="POST">
          </div>
          <div class="modal-footer">
            <button type="button" @click="closeActivateModal()" class="btn btn-outline-info">Cerrar</button>
            <button type="button" class="btn btn-info" @click="activateBox()">Activar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin del Modal Activar Tractor -->

	<!-- Modal Desactivar Tractor -->
    <div class="modal fade" id="deactivateBoxModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Desactivar caja</h5>
            <button type="button" class="close" @click="closeDeactivateModal()" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-3 text-center">
                <i class="fas fa-exclamation-circle fa-4x"></i>
                <h4 class="heading mt-4">Estás seguro?</h4>
                <p>
                    Estás a punto de desactivar esta caja
                </p>
            </div>
            <input type="hidden" v-model="id_box">
            <input type="hidden" v-model="method_field" name="_method" value="DELETE">
          </div>
          <div class="modal-footer">
            <button type="button" @click="closeDeactivateModal()" class="btn btn-outline-danger">Cerrar</button>
            <button type="button" class="btn btn-danger" @click="deactivateBox()">Desactivar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin del Modal Desactivar Usuario -->

    <!-- Modal Generar Movimiento -->
    <div class="modal fade" id="movimientoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Generar movimiento de caja</h5>
            <button type="button" class="close" @click="closeMovimientoModal()" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-3 text-center">
                <i class="fas fa-exclamation-circle fa-4x"></i>
                <h4 class="heading mt-4">Estás seguro?</h4>
                <p>
                    Se generará un movimiento de caja (ida o vuelta)
                </p>
            </div>
            <input type="hidden" v-model="id_box">
            <input type="hidden" v-model="method_field" name="_method" value="DELETE">
          </div>
          <div class="modal-footer">
            <button type="button" @click="closeMovimientoModal()" class="btn btn-outline-info">Cerrar</button>
            <button type="button" class="btn btn-info" @click="movimientoBox()">Generar</button>
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
		    	boxes : [],
		    	box : [],
		    	types : [],
		    	brands : [],
		    	services : [],
		    	owners : [],
		    	inspectionPoints : [],
		    	trucks : [],
		    	drivers : [],
		    	coordinators : [],
		    	mechanics : [],
		    	id_box : 0,
		    	trailer : '',
		    	type_id : '',
		    	brand_id : '',
		    	serie : '',
		    	plates : '',
		    	year : '',
		    	weight : '',
		    	service_id : '',
		    	owner_id : '',
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
		  	},
			methods: {
		  		listBoxes(){
		  			let me = this;
		  			axios.get(this.base_url + '/cajas/listar')
			      	.then(response => {
			        	me.boxes = response.data;
			      	})
			      	.catch(error => {
			        	console.log(error)
			        	this.errored = true
			      	})
		  		},
		  		createBox() {
					let me = this;
					axios.post(this.base_url + '/cajas', {
						id_box: this.id_box,
						trailer: this.trailer,
						type_id: document.getElementById("type_create").value,
						brand_id: document.getElementById("brand_create").value,
						serie: this.serie,
					    plates: this.plates,
					    year: this.year,
					    /*weight: this.weight,*/
					    /*service_id: document.getElementById("service_create").value,
					    owner_id: document.getElementById("owner_create").value,*/

					})
				  	.then(function (response) {
					    console.log(response);
					    me.closeCreateModal();
					    me.listBoxes();
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

						toastr.success("La caja se registró correctamente.", "Correcto");
					})
					.catch(function (error) {
					    console.log(error);
					    me.closeCreateModal();
					    me.listBoxes();
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
		  			let me = this;
		  			axios.get(this.base_url + '/cajas/relacionesCrear')
			      	.then(response => {
			      		console.log(response.data);
			      		me.types = response.data.types;
			      		me.brands = response.data.brands;
			      		me.services = response.data.services;
			      		me.owners = response.data.owners;
						$('#createBoxModal').modal('show');
			      	})
			      	.catch(error => {
			        	console.log(error)
			        	this.errored = true
			      	})
				},
				closeCreateModal() {
					this.id_box = '';
					this.box = [];
					this.trailer = '';					
					this.serie = '';
					this.plates = '';
					this.year = '';
					this.weight = '';					
					$('#createBoxModal').modal('hide');
					this.listBoxes();
				},
		  		showRevisionModal() {
		  			let me = this;
		  			axios.get(this.base_url + '/puntosInspeccion/listar')
			      	.then(response => {
			      		console.log(response.data);
			      		me.inspectionPoints = response.data;
			      	})
			      	.catch(error => {
			        	console.log(error)
			        	this.errored = true
			      	})
					$('#revisionBoxModal').modal('show');
				},
				closeRevisionModal() {
					this.id_box = 0;
					$('#revisionBoxModal').modal('hide');
				},
				saveBox() {
					let me = this;
					axios.post(this.base_url + '/cajas/' + this.id_box, {
						_method: "PUT",
						id_box: this.id_box,
						trailer: this.trailer,
						type_id: document.getElementById("type_edit").value,
						brand_id: document.getElementById("brand_edit").value,
						serie: this.serie,
					    plates: this.plates,
					    year: this.year,
					    weight: this.weight,
					    /*service_id: document.getElementById("service_edit").value,
					    owner_id: document.getElementById("owner_edit").value,*/
					})
				  	.then(function (response) {
					    console.log(response);
					    me.closeEditModal();
					    me.listBoxes();
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

						toastr.success("La información de la caja se guardó correctamente.", "Correcto");
					})
					.catch(function (error) {
					    console.log(error);
					    me.closeEditModal();
					    me.listBoxes();
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
				showEditModal(box = []) {
					let me = this;
		  			axios.get(this.base_url + '/cajas/relaciones/' + box.id)
			      	.then(response => {
			      		console.log(response.data);
			      		this.box = box;
			      		me.types = response.data.types;
			      		me.brands = response.data.brands;
			      		/*me.services = response.data.services;
			      		me.owners = response.data.owners;*/
			      	})
			      	.catch(error => {
			        	console.log(error)
			        	this.errored = true
			      	})

					this.id_box = box['id'];
					/*this.box = box;
			      	console.log(this.box);*/
					this.trailer = box['trailer'];
					this.serie = box['serie'];
					this.plates = box['plates'];
					this.year = box['year'];
					this.weight = box['weight'];
					$('#editBoxModal').modal('show');
				},
				closeEditModal() {
					this.id_box = '';
					this.box = [];
					this.trailer = '';					
					this.serie = '';
					this.plates = '';
					this.year = '';
					this.weight = '';					
					$('#editBoxModal').modal('hide');
					this.listBoxes();
				},
				deactivateBox() {
					let me = this;
					axios.post(this.base_url + '/cajas/desactivar/' + this.id_box, {
						id_box: this.id_box,
						_method: "DELETE",
					})
				  	.then(function (response) {
					    console.log(response);
					    me.closeDeactivateModal();
					    me.listBoxes();
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

						toastr.success("La caja se desactivó correctamente.", "Correcto");
					})
					.catch(function (error) {
					    console.log(error);
					    me.closeDeactivateModal();
					    me.listBoxes();
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
				showDeactivateModal(box = []) {
					this.id_box = box['id'];
					$('#deactivateBoxModal').modal('show');
				},
				closeDeactivateModal() {
					this.id_box = 0;
					$('#deactivateBoxModal').modal('hide');
				},
				activateBox() {
					let me = this;
					axios.post(this.base_url + '/cajas/activar/' + this.id_box, {
						id_box: this.id_box,
						_method: "POST",
					})
				  	.then(function (response) {
					    console.log(response);
					    me.closeActivateModal();
					    me.listBoxes();
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

						toastr.success("La caja se activó correctamente.", "Correcto");
					})
					.catch(function (error) {
					    console.log(error);
					    me.closeActivateModal();
					    me.listBoxes();
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
				showActivateModal(box = []) {
					this.id_box = box['id'];
					$('#activateBoxModal').modal('show');
				},
				closeActivateModal() {
					this.id_box = 0;
					$('#activateBoxModal').modal('hide');
				},
				showInspeccionDiarioModal(box = []) {
		  			let me = this;
		  			axios.get(this.base_url + '/puntosInspeccion/listarTTI')
			      	.then(response => {
			      		console.log(response.data);
			      		me.inspectionPoints = response.data.points;
			      		me.trucks = response.data.trucks;
			      		me.drivers = response.data.drivers;
			      		me.coordinators = response.data.coordinators;
			      		$("#inspeccionDiarioModal #box_id").val(box['id']);
			      		$("#trailer_number").val(box['trailer']);
			      		$("#trailer_plates").val(box['plates']);
						$('#inspeccionDiarioModal').modal('show');
			      	})
			      	.catch(error => {
			        	console.log(error)
			        	this.errored = true
			      	})
				},
				findPlates()
				{
					let me = this;
					console.log(document.getElementById("unit_number").value);
		  			axios.get(this.base_url + '/tractores/buscarPlacas/' + document.getElementById("unit_number").value)
			      	.then(response => {
			      		console.log(response.data);
			      		$("#unit_plates").val(response.data[0].plates);
			      	})
			      	.catch(error => {
			        	console.log(error)
			        	this.errored = true
			      	})
				},
				closeInspeccionDiarioModal() {
		  			$('#inspeccionDiarioModal').modal('hide');
				},
				showMantenimientoPreventivoModal(box = []) {
		  			let me = this;
		  			axios.get(this.base_url + '/puntosInspeccion/listar')
			      	.then(response => {
			      		console.log(response.data);
			      		me.inspectionPoints = response.data.points;
			      		me.boxes = response.data.boxes;			      		
			      		me.trucks = response.data.trucks;			      		
			      		me.drivers = response.data.drivers;
			      		me.coordinators = response.data.coordinators;
			      		me.mechanics = response.data.mechanics;
			      		$("#mantenimientoPreventivoForm #box_id").val(box['id']);
			      		$("#mantenimientoPreventivoForm #trailer_number").val(box['trailer']);
			      	})
			      	.catch(error => {
			        	console.log(error)
			        	this.errored = true
			      	})
					$('#mantenimientoPreventivoModal').modal('show');
				},
				closeMantenimientoPreventivoModal() {
					this.id_truck = 0;
					$('#mantenimientoPreventivoModal').modal('hide');
				},
				movimientoBox() {
					let me = this;
					axios.post(this.base_url + '/cajas/movimientos/' + this.id_box, {
						id_box: this.id_box,
						_method: "POST",
					})
				  	.then(function (response) {
					    console.log(response);
					    me.closeMovimientoModal();
					    me.listBoxes();
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

						toastr.success("Se generó el movimiento correctamente.", "Correcto");
					})
					.catch(function (error) {
					    console.log(error);
					    me.closeMovimientoModal();
					    me.listBoxes();
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

						toastr.error("Ocurrió un problema al generar el movimiento.", "Incorrecto");
					});
				},
				showMovimientoModal(box = []) {
					this.id_box = box['id'];
					$('#movimientoModal').modal('show');
				},
				closeMovimientoModal() {
					this.id_box = 0;
					$('#movimientoModal').modal('hide');
				},
				showBoxInformationModal(box = []){
					this.id_box = box['id'];
					window.location = this.base_url + '/cajas/' + this.id_box;
				}
			},
			mounted() {
			    this.listBoxes();
			}
		})
	</script>
	<script type="text/javascript">
		$(document).ready( function () {
			setTimeout( function(){
			    $('#boxesTable').DataTable({
			    	"language" : {
					    "sProcessing":     "Procesando...",
		                "sLengthMenu":     "Mostrar _MENU_ registros",
		                "sZeroRecords":    "No se encontraron resultados",
		                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
		                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
		                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		                "sInfoPostFix":    "",
		                "sSearch":         "Buscar:",
		                "sUrl":            "",
		                "sInfoThousands":  ",",
		                "sLoadingRecords": "Cargando...",
		                "oPaginate": {
		                    "sFirst":    "Primero",
		                    "sLast":     "Último",
		                    "sNext":     "Siguiente",
		                    "sPrevious": "Anterior"
		                },
		                "oAria": {
		                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		                },
		                "buttons": {
		                    "copy": "Copiar",
		                    "colvis": "Visibilidad"
		                }
					},
					"dom" : "<'row justify-content-between'<'justify-content-between col-sm-12 col-md-10'l><'justify-content-between col-sm-12 col-md-2'f>>" +
							"<'row'<'col-sm-12'tr>>" +
							"<'row justify-content-between'<'col-sm-12 col-md-9'i><'col-sm-12 col-md-3'p>>",
			    });
			}, 300);
		} );

		@if(session()->has('success'))
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

			toastr.success("{{ session('success') }}", "Correcto");
        @endif

        @if(session()->has('error'))
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

			toastr.error("{{ session('error') }}", "Incorrecto");
        @endif
	</script>
@endsection
