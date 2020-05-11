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
							<a class="nav-link active" data-toggle="tab" href="#kt_apps_user_edit_tab_2" role="tab">
								<i class="flaticon2-protected"></i> Inspección diaria
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_2" role="tab">
								<i class="flaticon2-protected"></i> Mantenimiento preventivo
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	<!--end::Portlet-->

@endsection

@section('modals')
 	<!-- Modal Crear Tractor -->
    <div class="modal fade" id="createTruckModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Crear tractor</h5>
                    <button type="button" class="close" @click="closeCreateModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" v-model="id_truck">
                    <input type="hidden" v-model="method_field" name="_method" value="PUT">
                    <div class="form-group row">
                    	<div class="col-lg-4">
	                        <label for="number" class=" form-control-label">Número:</label>
	                        <input type="text" v-model="number" name="number" placeholder="Ingrese el número..." class="form-control">
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
                    	<div class="col-lg-2">
	                        <label for="year" class=" form-control-label">Año</label>
	                        <input type="text" v-model="year" name="year" placeholder="Ingrese el año..." class="form-control">
	                        <span class="form-text text-muted">Porfavor ingresa el año</span>
                    	</div>
                    	<div class="col-lg-2">
	                        <label for="weight" class=" form-control-label">Peso Tons.</label>
	                        <input type="text" v-model="weight" name="weight" placeholder="Ingrese el peso..." class="form-control">
	                        <span class="form-text text-muted">Porfavor ingresa el peso</span>
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<div class="col-lg-4">
	                        <label for="service" class=" form-control-label">Servicio</label>
	                        <select class="form-control" name="service" id="service_create">
								<option v-for="service in services" 
										:value="service.id" 
										v-text="service.name" >
								</option>
								<option selected>Seleccionar...</option>
							</select>
							<span class="form-text text-muted">Porfavor selecciona el servicio</span>
                    	</div>
                    	<div class="col-lg-4">
	                        <label for="owner" class=" form-control-label">Propietario</label>
	                        <select class="form-control" name="owner" id="owner_create">
								<option v-for="owner in owners"
										:value="owner.id"
										v-text="owner.name">
								</option>
								<option selected>Seleccionar...</option>
							</select>
							<span class="form-text text-muted">Porfavor selecciona el propietario</span>
                    	</div>
                    </div>
                </div>
                <div class="modal-footer kt-portlet__foot kt-portlet__foot--solid">
                    <button type="button" class="btn btn-outline-brand" @click="closeCreateModal()">Cerrar</button>
                    <button type="button" class="btn btn-brand" @click="createTruck()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Modal Crear Tractor -->

    <!-- Modal Daily Inspection -->
    <div class="modal fade" id="dailyInspectionModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Insepección diaria de unidades y cajas</h5>
                    <button type="button" class="close" @click="closeDailyInspectionModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                    	<div class="col-lg-6">
	                        <label for="name" class=" form-control-label">Fecha</label>
	                        <input type="text" name="name" placeholder="Ingrese la fecha..." class="form-control">
                    	</div>
                    	<div class="col-lg-6">
	                        <label for="last_name" class=" form-control-label">Nombre del chofer</label>
	                        <input type="text" name="last_name" placeholder="Ingrese el nombre del chofer..." class="form-control">
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
	                    			<select class="form-control form-control-sm" name="point_inspection_value" id="point_inspection_value">
										<option value="1">Buen estado</option>
										<option value="2">Mal estado</option>
										<option value="3">No aplica</option>
									</select>
	                    		</div>                    		
								<div class="col-lg-5 col-form-label">
		                        	<label for="trailer_plates" class=" form-control-label">
		                        		@{{ inspectionPoint.point_name }}
		                        	</label>
	                    		</div>
                    		</div>
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<div class="col-lg-6">
	                        <label for="email" class=" form-control-label">Número de caja</label>
	                        <input type="text" name="email" placeholder="Ingrese el número de caja..." class="form-control">
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
	                    			<select class="form-control form-control-sm" name="point_inspection_value" id="point_inspection_value">
										<option value="1">Buen estado</option>
										<option value="2">Mal estado</option>
										<option value="3">No aplica</option>
									</select>
	                    		</div>                    		
								<div class="col-lg-5 col-form-label">
		                        	<label for="trailer_plates" class=" form-control-label">
		                        		@{{ inspectionPoint.point_name }}
		                        	</label>
	                    		</div>
                    		</div>
                    	</div>
                    </div>
                    <div class="form-group row">
                		<div class="col-lg-1">
                			<select class="form-control form-control-sm" name="" id="">
								<option value="1">Buen estado</option>
								<option value="2">Mal estado</option>
								<option value="3">No aplica</option>
							</select>
                		</div>                    		
						<div class="col-lg-11 col-form-label">
                        	<label for="" class=" form-control-label">
                        		Las condiciones anteriores del vehículo son satisfactorias
                        	</label>
                		</div>
            		</div>
            		<div class="form-group row">
                    	<div class="col-lg-6">
	                        <label for="firm_conductor" class=" form-control-label">Firma de conductor</label>
	                        <input type="firm_conductor" name="firm_conductor" placeholder="Ingrese la firma..." class="form-control">
                    	</div>
                    </div>
                    <div class="form-group row">
                		<div class="col-lg-1">
                			<select class="form-control form-control-sm" name="" id="">
								<option value="1">Buen estado</option>
								<option value="2">Mal estado</option>
								<option value="3">No aplica</option>
							</select>
                		</div>                    		
						<div class="col-lg-11 col-form-label">
                        	<label for="" class=" form-control-label">
                        		Los defectos de arriba fueron corregidos
                        	</label>
                		</div>
            		</div>
                    <div class="form-group row">
                    	<div class="col-lg-6">
	                        <label for="firm_coordinator" class=" form-control-label">Firma de coordinador Sama</label>
	                        <input type="firm_coordinator" name="firm_coordinator" placeholder="Ingrese la firma..." class="form-control">
                    	</div>
                    </div>
                    <div class="form-group">
                    	<div class="col-lg-6">
                        	<label for="firm_guard" class=" form-control-label">Firma de guardia Sama</label>
                        	<input type="firm_guard" name="firm_guard" placeholder="Ingrese la firma..." class="form-control">
                    	</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-brand" @click="closeDailyInspectionModal()">Cerrar</button>
                    <button type="button" class="btn btn-brand" @click="createDailyInspection()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Modal Daily Inspection -->

    <!-- Modal Points Truck & Trailer Inspection -->
    <div class="modal fade" id="revisionPTTIModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Truck & Trailer Inspection</h5>
                    <button type="button" class="close" @click="closeTTInspectionModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                    	<div class="col-lg-6">
	                        <label for="name" class=" form-control-label">Name/Nombre</label>
	                        <input type="text" name="name" placeholder="Ingrese el name/nombre..." class="form-control form-control-sm">
                    	</div>
                    	<div class="col-lg-6">
	                        <label for="date" class=" form-control-label">Fecha/Date</label>
	                        <input type="text" name="date" placeholder="Ingrese la fecha/date..." class="form-control form-control-sm">
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<div class="col-lg-6">
	                        <label for="unit_number" class=" form-control-label">Número de unidad/Unit number</label>
	                        <input type="text" name="unit_number" placeholder="Ingrese el número de unidad/unit number..." class="form-control form-control-sm">
                    	</div>
                    	<div class="col-lg-6">
	                        <label for="unit_plates" class=" form-control-label">Placas/Plates</label>
	                        <input type="text" name="unit_plates" placeholder="Ingrese las placas/plates..." class="form-control form-control-sm">
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<div class="col-lg-6">
	                        <label for="trailer" class=" form-control-label">Número de caja/Trailer number</label>
	                        <input type="text" name="trailer" placeholder="Ingrese el número de caja/trailer number..." class="form-control form-control-sm">
                    	</div>
                    	<div class="col-lg-6">
	                        <label for="trailer_plates" class=" form-control-label">Placas/Plates</label>
	                        <input type="text" name="trailer_plates" placeholder="Ingrese las placas/plates..." class="form-control form-control-sm">
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
	                    			<select class="form-control form-control-sm" name="point_inspection_value" id="point_inspection_value">
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
                    	<div class="col-lg-12">
	                        <label for="comments" class=" form-control-label">Comentarios/Comments</label>
	                        <textarea class="form-control" name="comments" id="comments" rows="3"></textarea>
                    	</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-brand" @click="closeTTInspectionModal()">Cerrar</button>
                    <button type="button" class="btn btn-brand" @click="createUser()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Modal Generar revisión -->

    <!-- Modal Editar Información de Tractor -->
    <div class="modal fade" id="editTruckModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Editar información de tractor</h5>
                    <button type="button" class="close" @click="closeEditModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" v-model="id_truck">
                    <input type="hidden" v-model="method_field" name="_method" value="PUT">
                    <div class="form-group row">
                    	<div class="col-lg-4">
	                        <label for="number" class=" form-control-label">Número:</label>
	                        <input type="text" v-model="number" name="number" placeholder="Ingrese el número..." class="form-control">
	                        <span class="form-text text-muted">Porfavor ingresa el número</span>
                    	</div>
                    	<div class="col-lg-4">
	                        <label for="type" class=" form-control-label">Tipo:</label>
	                        <!-- <input type="text" v-model="type" name="type" placeholder="Ingrese el tipo..." class="form-control"> -->
	                        <select class="form-control" name="type" id="type_edit">
								<option v-for="type in types" 
										:value="type.id"
										v-text="type.name"
										:selected="type.id == truck.type_id ? 'selected' : ''">
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
										:selected="brand.id == truck.brand_id">
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
                    	<div class="col-lg-2">
	                        <label for="year" class=" form-control-label">Año</label>
	                        <input type="text" v-model="year" name="year" placeholder="Ingrese el año..." class="form-control">
	                        <span class="form-text text-muted">Porfavor ingresa el año</span>
                    	</div>
                    	<div class="col-lg-2">
	                        <label for="weight" class=" form-control-label">Peso Tons.</label>
	                        <input type="text" v-model="weight" name="weight" placeholder="Ingrese el peso..." class="form-control">
	                        <span class="form-text text-muted">Porfavor ingresa el peso</span>
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<div class="col-lg-4">
	                        <label for="service" class=" form-control-label">Servicio</label>
	                        <select class="form-control" name="service" id="service_edit">
								<option v-for="service in services" 
										:value="service.id" 
										v-text="service.name" 
										:selected="service.id == truck.service_id">
								</option>
							</select>
							<span class="form-text text-muted">Porfavor selecciona el servicio</span>
                    	</div>
                    	<div class="col-lg-4">
	                        <label for="owner" class=" form-control-label">Propietario</label>
	                        <select class="form-control" name="owner" id="owner_edit">
								<option v-for="owner in owners"
										:value="owner.id"
										v-text="owner.name"
										:selected="owner.id == truck.owner_id">
								</option>
							</select>
							<span class="form-text text-muted">Porfavor selecciona el propietario</span>
                    	</div>
                    </div>
                </div>
                <div class="modal-footer kt-portlet__foot kt-portlet__foot--solid">
                    <button type="button" class="btn btn-outline-brand" @click="closeEditModal()">Cerrar</button>
                    <button type="button" class="btn btn-brand" @click="saveTruck()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Modal Editar Información de Tractor -->

    <!-- Modal Activar Tractor -->
    <div class="modal fade" id="activateTruckModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Activar tractor</h5>
            <button type="button" class="close" @click="closeActivateModal()" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-3 text-center">
                <i class="fas fa-exclamation-circle fa-4x"></i>
                <h4 class="heading mt-4">Estás seguro?</h4>
                <p>
                    Estás a punto de activar este tractor
                </p>
            </div>
            <input type="hidden" v-model="id_truck">
            <input type="hidden" v-model="method_field" name="_method" value="POST">
          </div>
          <div class="modal-footer">
            <button type="button" @click="closeActivateModal()" class="btn btn-outline-info">Cerrar</button>
            <button type="button" class="btn btn-info" @click="activateTruck()">Activar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin del Modal Activar Tractor -->

	<!-- Modal Desactivar Tractor -->
    <div class="modal fade" id="deactivateTruckModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Desactivar tractor</h5>
            <button type="button" class="close" @click="closeDeactivateModal()" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-3 text-center">
                <i class="fas fa-exclamation-circle fa-4x"></i>
                <h4 class="heading mt-4">Estás seguro?</h4>
                <p>
                    Estás a punto de desactivar este tractor
                </p>
            </div>
            <input type="hidden" v-model="id_truck">
            <input type="hidden" v-model="method_field" name="_method" value="DELETE">
          </div>
          <div class="modal-footer">
            <button type="button" @click="closeDeactivateModal()" class="btn btn-outline-danger">Cerrar</button>
            <button type="button" class="btn btn-danger" @click="deactivateTruck()">Desactivar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin del Modal Desactivar Usuario -->
@endsection

@section('scripts')
	
@endsection
