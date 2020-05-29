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
					<a href="{{ route('cajas.index') }}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--home">Cajas</a>
					<span class="kt-subheader__breadcrumbs-separator"></span>
					<a href="" class="kt-subheader__breadcrumbs-link ">Información de caja</a>
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
	<!--begin::Portlet-->
		<div class="kt-portlet kt-widget kt-widget--fit kt-widget--general-3">
			<div class="kt-portlet__body">
				<div class="kt-widget__top">
					<div class="kt-widget__wrapper">
					<input type="hidden" value="{{ $box->id }}" id="id_box">
						<div class="kt-widget__label">
							<a href="#" class="kt-widget__title">
								{{ $box->trailer }}
							</a>
							<span class="kt-widget__desc">
								{{ $box->serie }}
							</span>
						</div>
						<div class="kt-widget__links">
							<div class="kt-widget__cont">
								<div class="kt-widget__link">
									<span>Tipo: </span><a href="#">&nbsp;{{ $box->type->name }}</a>
								</div>
								<div class="kt-widget__link">
									<span>Marca: </span><a href="#">&nbsp;{{ $box->brand->name}}</a>
								</div>
							</div>
						</div>
						<div class="kt-widget__links">
							<div class="kt-widget__cont">
								<div class="kt-widget__link">
									<span>Placas: </span><a href="#">&nbsp;{{ $box->plates }}</a>
								</div>
								<div class="kt-widget__link">
									<span>Año: </span><a href="#">&nbsp;{{ $box->year }}</a>
								</div>
								<div class="kt-widget__link">
									<span>Peso/Tons: </span><a href="#">&nbsp;{{ $box->weight }}</a>
								</div>
							</div>
						</div>
						<div class="kt-widget__links">
							<div class="kt-widget__cont">
								<div class="kt-widget__link">
									<span>Clasificación: </span><a href="#">&nbsp;{{ $box->clasification }}</a>
								</div>
							</div>
						</div>

						<div class="kt-widget__progress">
							<div class="kt-widget__cont">
								<div class="kt-widget__stat">
									<span class="kt-widget__caption">Estado</span>
									<span class="kt-widget__value">{{ $box->porcentaje() }}%</span>
								</div>
								<div class="progress">

									<!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
									<div class="progress-bar bg-brand" role="progressbar" style="width: {{ $box->porcentaje() }}%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="kt-widget__stats">
							<div class="kt-widget__stat" href="#">
								<span class="kt-widget__value">{{ $box->movimientos() }}</span>
								<span class="kt-widget__caption">Movimientos generados</span>
							</div>
							<!-- <div class="kt-widget__stat" href="#">
								<span class="kt-widget__value">{{ $box->proximaInspeccion() }}</span>
								<span class="kt-widget__caption">Próxima inspección</span>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<div class="kt-portlet__foot kt-portlet__foot--fit">
				<div class="kt-widget__nav ">
					<ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-clear nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand kt-portlet__space-x" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#inspeccion-diaria" role="tab">
								<i class="flaticon2-protected"></i> Inspección diaria
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#mantenimiento-preventivo" role="tab">
								<i class="flaticon2-protected"></i> Mantenimiento preventivo
							</a>
						</li>
					</ul>
					<div class="tab-content container-fluid">
						<div class="tab-pane active" id="inspeccion-diaria" role="tabpanel">
							<table class="table table-head-noborder">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nombre</th>
										<th>Fecha</th>
										<!-- <th>Truck</th> -->
										<th>Truck</th>
										<th>Driver</th>
										<th>Coordinator</th>
										<th>Comments</th>
										<th>Accciones</th>
									</tr>
								</thead>
								<tbody>
									<tr v-for="inspection in inspections">
										<th v-text="inspection.id"></th>
										<td v-text="inspection.name"></td>
										<td v-text="inspection.date"></td>
										<!-- <td v-text="inspection.truck.serie"></td> -->
										<td v-text="inspection.truck.serie"></td>
										<td v-text="inspection.driver.first_name"></td>
										<td v-text="inspection.coordinator.first_name"></td>
										<td v-text="inspection.comments"></td>
										<td>
											<a class="dropdown-item" href="#" @click="showEditInspectionModal(inspection)">
												<i class="flaticon2-contract"></i> 
												Editar información
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="mantenimiento-preventivo" role="tabpanel">
							<table class="table table-head-noborder">
								<thead>
									<tr>
										<th>ID</th>
										<th>Box</th>
										<th>Driver</th>
										<th>Vehicle conditions</th>
										<th>Conductor</th>
										<th>Defect correcteds</th>
										<th>Mechanic</th>
										<th>Coordinator</th>
										<th>Comments</th>
										<th>Accciones</th>
									</tr>
								</thead>
								<tbody>
									<tr v-for="maintenance in maintenances">
										<th v-text="maintenance.id"></th>
										<td v-text="maintenance.box.trailer"></td>
										<td v-text="maintenance.driver.first_name"></td>
										<td v-if="maintenance.vehicle_conditions == '1'">Buen estado</td>
										<td v-if="maintenance.vehicle_conditions == '2'">Mal estado</td>
										<td v-if="maintenance.vehicle_conditions == '3'">No aplica</td>
										<td v-text="maintenance.conductor.first_name"></td>
										<td v-text=""></td>
										<td v-text="maintenance.mechanic.first_name"></td>
										<td v-text="maintenance.coordinator.first_name"></td>
										<td v-if="maintenance.defect_correcteds == '1'">Buen estado</td>
										<td v-if="maintenance.defect_correcteds == '2'">Mal estado</td>
										<td v-if="maintenance.defect_correcteds == '3'">No aplica</td>
										<td>
											<a class="dropdown-item" href="#" @click="showEditMaintenanceModal(maintenance)">
												<i class="flaticon2-contract"></i> 
												Editar información
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!--end::Portlet-->

@endsection

@section('modals')
 	<!-- Modal Editar Inspeccion Diario -->
	<div class="modal fade" id="inspeccionDiarioModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    	<form method="POST" action="{{ route('inspecciones.modificar') }}" class="kt-form kt-form--label-right">				
			{!! csrf_field() !!}
			<input type="hidden" name="inspection_id" id="inspection_id">
			<input type="hidden" name="truck_id" id="truck_id">
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
		                        <input type="text" name="name" id="name" placeholder="Ingrese el name/nombre..." class="form-control form-control-sm" required>
		                        <span class="form-text text-muted">Porfavor ingrese el nombre</span>
	                    	</div>
	                    	<div class="col-lg-6">
		                        <label for="date" class=" form-control-label">Fecha/Date <span class="text-danger">*</span></label>
		                        <input type="date" name="date" id="date" placeholder="Ingrese la fecha/date..." class="form-control form-control-sm" required>
		                        <span class="form-text text-muted">Porfavor ingrese la fecha</span>
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                    	<div class="col-lg-6">
		                        <label for="unit_number" class=" form-control-label">Número de unidad/Unit number <span class="text-danger">*</span></label>
		                        <input type="text" name="unit_number" id="unit_number" placeholder="Ingrese el número de unidad/unit number..." class="form-control form-control-sm" required>
		                        <span class="form-text text-muted">Porfavor ingrese el número de unidad</span>
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
		                        <select class="form-control form-control-sm" name="box_id" id="trailer_number" required>
									<option selected>Seleccionar...</option>
									<option v-for="box in boxes.boxes" 
											:value="box.id"
											v-text="box.trailer"
											:selected="inspection.box.id == box.id ? 'selected' : ''">
									</option>
								</select>
								<span class="form-text text-muted">Porfavor selecciona la caja</span>
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
											<template v-for="(punto, index) in puntos" v-if="punto.point_id == inspectionPoint.id">
												<option value="1" :selected="punto.value == 1 ? 'selected' : ''">Buen estado</option>
												<option value="2" :selected="punto.value == 2 ? 'selected' : ''">Mal estado</option>
												<option value="3" :selected="punto.value == 3 ? 'selected' : ''">No aplica</option>
											</template>
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
											v-text="driver.first_name"
											:selected="inspection.driver_id == driver.id ? 'selected' : ''">
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
											v-text="coordinator.first_name"
											:selected="inspection.coordinator_id == coordinator.id ? 'selected' : ''">>
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
	<!-- Fin de Modal Editar Inspeccion Diario -->
	
	<!-- Modal Mantenimiento Preventivo -->
    <div class="modal fade" id="mantenimientoPreventivoModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    	<form method="POST" id="mantenimientoPreventivoForm" action="{{ route('mantenimientos.modificar') }}" class="kt-form kt-form--label-right">				
			{!! csrf_field() !!}
			<input type="hidden" name="maintenance_id" id="maintenance_id">
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
		                        <input type="date" name="date" id="date" placeholder="Ingrese la fecha..." class="form-control form-control-sm" required>
		                        <span class="form-text text-muted">Porfavor ingrese la fecha</span>
	                    	</div>
	                    	<div class="col-lg-6">
		                        <label for="last_name" class=" form-control-label">Nombre del chofer <span class="text-danger">*</span></label>
		                        <select class="form-control form-control-sm" name="driver_id" id="driver_id" @change="findPlates()" required>
									<option v-for="driver in drivers" 
											:value="driver.id"
											v-text="driver.first_name"
											:selected="maintenance.driver_id == driver.id ? 'selected' : ''">
									</option>
									<option selected>Seleccionar...</option>
								</select>
								<span class="form-text text-muted">Porfavor seleccione el chofer</span>
	                    	</div>
	                    </div>
						<div class="form-group row">
	                    	<div v-for="(inspectionPoint, index) in inspectionPoints" v-if="inspectionPoint.type === 'TRUCK'" class="col-lg-4">
	                    		<div class="form-group row">
		                    		<div class="col-lg-7">
		                    			<select class="form-control form-control-sm" name="points_inspection[]" id="point_truck" required>
		                    				<!-- <option value="">Selecciona...</option> -->
											<!-- <option value="1">Buen estado</option>
											<option value="2">Mal estado</option>
											<option value="3">No aplica</option> -->
											<template v-for="(punto, index) in puntos" v-if="punto.point_id == inspectionPoint.id">
												<option value="1" :selected="punto.value == 1 ? 'selected' : ''">Buen estado</option>
												<option value="2" :selected="punto.value == 2 ? 'selected' : ''">Mal estado</option>
												<option value="3" :selected="punto.value == 3 ? 'selected' : ''">No aplica</option>
											</template>
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
								<label for="trailer" class=" form-control-label">Número de caja/Trailer number <span class="text-danger">*</span></label>
		                        <!-- <input type="text" name="trailer_number" id="trailer_number" placeholder="Ingrese el número de caja/trailer number..." class="form-control form-control-sm"> -->
		                        <select class="form-control form-control-sm" name="box_id" id="trailer_number" @change="findPlates()" required>
									<option v-for="box in boxesMaintenance.boxes" 
											:value="box.id"
											v-text="box.trailer"
											:selected="maintenance.box.id == box.id ? 'selected' : ''">
									</option>
								</select>
								<span class="form-text text-muted">Porfavor selecciona la caja</span>
		                    </div>
	                    </div>
						<div class="form-group row">
	                    	<div v-for="(inspectionPoint, index) in inspectionPoints" v-if="inspectionPoint.type === 'TRAILER'" class="col-lg-4">
	                    		<div class="form-group row">
		                    		<div class="col-lg-7">
		                    			<select class="form-control form-control-sm" name="points_inspection[]" id="point_inspection_value" required>
		                    				<!-- <option value="" selected>Selecciona...</option>
											<option value="1">Buen estado</option>
											<option value="2">Mal estado</option>
											<option value="3">No aplica</option> -->
											<template v-for="(punto, index) in puntos" v-if="punto.point_id == inspectionPoint.id">
												<option value="1" :selected="punto.value == 1 ? 'selected' : ''">Buen estado</option>
												<option value="2" :selected="punto.value == 2 ? 'selected' : ''">Mal estado</option>
												<option value="3" :selected="punto.value == 3 ? 'selected' : ''">No aplica</option>
											</template>
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
									<option value="1" :selected="maintenance.vehicle_conditions == 1 ? 'selected' : ''">Buen estado</option>
									<option value="2" :selected="maintenance.vehicle_conditions == 2 ? 'selected' : ''">Mal estado</option>
									<option value="3" :selected="maintenance.vehicle_conditions == 3 ? 'selected' : ''">No aplica</option>
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
											v-text="driver.first_name"
											:selected="maintenance.firm_conductor == driver.id ? 'selected' : ''">
									</option>
									<option selected>Seleccionar...</option>
								</select>
		                        <span class="form-text text-muted">Porfavor selecciona el conductor</span>
	                    	</div>
	                    </div>
	                    <div class="form-group row">
	                		<div class="col-lg-3">
	                			<select class="form-control form-control-sm" name="defect_correcteds" id="">
									<option value="1" :selected="maintenance.defect_correcteds == 1 ? 'selected' : ''">Buen estado</option>
									<option value="2" :selected="maintenance.defect_correcteds == 2 ? 'selected' : ''">Mal estado</option>
									<option value="3" :selected="maintenance.defect_correcteds == 3 ? 'selected' : ''">No aplica</option>
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
											v-text="mechanic.first_name"
											:selected="maintenance.firm_mechanic == mechanic.id ? 'selected' : ''">
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
											v-text="coordinator.first_name"
											:selected="maintenance.firm_coordinator == coordinator.id ? 'selected' : ''">
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
@endsection

@section('scripts')
<script type="text/javascript">
		var app = new Vue({
		  	el : '#app',
		  	data : {
		    	inspection : [],
		    	inspections : [],  
				maintenance : [],
		    	maintenances : [],  
				inspectionPoints : [],
				puntos : [],
				trucks : [],
				boxes : [],
				boxesMaintenance : [],
		    	drivers : [],
		    	coordinators : [],
				mechanics : [],
				base_url: '<?php echo url('/'); ?>',	
		    	id_box: $("#id_box").val(),
		  	},
			methods: {
		  		listInspections(){
					let me = this;
		  			axios.get(this.base_url + '/inspecciones_caja/listar/' + this.id_box)
			      	.then(response => {
			      		console.log(response.data);
			        	me.inspections = response.data;
			      	})
			      	.catch(error => {
			        	console.log(error)
			        	this.errored = true
			      	})
				  },
				listMaintenances(){
					let me = this;
		  			axios.get(this.base_url + '/mantenimientos_caja/listar/' + this.id_box)
			      	.then(response => {
			      		console.log(response.data);
			        	me.maintenances = response.data;
			      	})
			      	.catch(error => {
			        	console.log(error)
			        	this.errored = true
			      	})
				},
				showEditInspectionModal(inspection = []){
					let me = this;
					axios.get(this.base_url + '/inspecciones/buscar/' + inspection.id)
			      	.then(response => {
			      		console.log(response.data);
			        	me.inspection = response.data.inspection;

						$('#inspeccionDiarioModal #inspection_id').val(me.inspection.id);
						$('#inspeccionDiarioModal #truck_id').val(me.inspection.truck.id);
						$('#inspeccionDiarioModal #name').val(me.inspection.name);
						$('#inspeccionDiarioModal #date').val(me.inspection.date);
						$('#inspeccionDiarioModal #unit_number').val(me.inspection.truck.number);
						$('#inspeccionDiarioModal #unit_plates').val(me.inspection.truck.plates);
						$('#inspeccionDiarioModal #trailer_plates').val(me.inspection.box.plates);
						$('#inspeccionDiarioModal #comments').val(me.inspection.comments);

						me.puntos = response.data.points;
						me.inspectionPoints = response.data.pointsInspection;
						me.boxes = response.data;
						setTimeout(function(){
						}, 2000)
			      		me.drivers = response.data.drivers;
			      		me.coordinators = response.data.coordinators;
						$('#inspeccionDiarioModal').modal('show');
			      	})
			      	.catch(error => {
			        	console.log(error)
			        	this.errored = true
			      	})
				},
				closeInspeccionDiarioModal() {
		  			$('#inspeccionDiarioModal').modal('hide');
				},
				showEditMaintenanceModal(maintenance = []){
					console.log(maintenance);
					let me = this;
					axios.get(this.base_url + '/mantenimientos/buscar/' + maintenance.id)
			      	.then(response => {
						console.log(response.data.boxes);

						$('#mantenimientoPreventivoModal #maintenance_id').val(maintenance.id);
						$('#mantenimientoPreventivoModal #truck_id').val(maintenance.truck.id);
						$('#mantenimientoPreventivoModal #date').val(maintenance.date);
	
						me.maintenance = maintenance;
			      		me.puntos = response.data.points;
						me.inspectionPoints = response.data.pointsMaintenance;
						me.boxesMaintenance = response.data;
						me.drivers = response.data.drivers;
						me.coordinators = response.data.coordinators;
						me.mechanics = response.data.mechanics;
						$('#mantenimientoPreventivoModal').modal('show');	
			      	})
			      	.catch(error => {
			        	console.log(error)
			        	this.errored = true
			      	})
				},
				closeMantenimientoPreventivoModal() {
					this.id_truck = 0;
					$('#mantenimientoPreventivoModal').modal('hide');
				},
				  
			},
			mounted() {
				this.listInspections();
				this.listMaintenances();
			}
		});
	</script>
@endsection
