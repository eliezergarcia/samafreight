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
					<a href="{{ route('tractores.index') }}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--home">Tractores</a>
					<span class="kt-subheader__breadcrumbs-separator"></span>
					<a href="" class="kt-subheader__breadcrumbs-link ">Información de tractor</a>
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
						<input type="hidden" value="{{ $truck->id }}" id="id_truck">
						<div class="kt-widget__label">
							<a href="#" class="kt-widget__title">
								{{ $truck->number }}
							</a>
							<span class="kt-widget__desc">
								{{ $truck->serie }}
							</span>
						</div>
						<div class="kt-widget__links">
							<div class="kt-widget__cont">
								<div class="kt-widget__link">
									<span>Número: </span><a href="#">&nbsp;{{ $truck->type->name }}</a>
								</div>
								<div class="kt-widget__link">
									<span>Tipo: </span><a href="#">&nbsp;{{ $truck->brand->name}}</a>
								</div>
							</div>
						</div>
						<div class="kt-widget__links">
							<div class="kt-widget__cont">
								<div class="kt-widget__link">
									<span>Placas: </span><a href="#">&nbsp;{{ $truck->plates }}</a>
								</div>
								<div class="kt-widget__link">
									<span>Año: </span><a href="#">&nbsp;{{ $truck->year }}</a>
								</div>
								<div class="kt-widget__link">
									<span>Peso/Tons: </span><a href="#">&nbsp;{{ $truck->weight }}</a>
								</div>
							</div>
						</div>
						<div class="kt-widget__links">
							<div class="kt-widget__cont">
								<div class="kt-widget__link">
									<span>Servicio: </span><a href="#">&nbsp;{{ $truck->service->name }}</a>
								</div>
								<div class="kt-widget__link">
									<span>Propietario: </span><a href="#">&nbsp;{{ $truck->owner->name}}</a>
								</div>
							</div>
						</div>

						<div class="kt-widget__progress">
							<div class="kt-widget__cont">
								<div class="kt-widget__stat">
									<span class="kt-widget__caption">Estado</span>
									<span class="kt-widget__value">{{ $truck->porcentaje() }}%</span>
								</div>
								<div class="progress">

									<!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
									<div class="progress-bar bg-brand" role="progressbar" style="width: {{ $truck->porcentaje() }}%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="kt-widget__stats">
							<div class="kt-widget__stat" href="#">
								<span class="kt-widget__value">{{ $truck->ultimaInspeccion() }}</span>
								<span class="kt-widget__caption">Última inspección</span>
							</div>
							<div class="kt-widget__stat" href="#">
								<span class="kt-widget__value">{{ $truck->proximaInspeccion() }}</span>
								<span class="kt-widget__caption">Próxima inspección</span>
							</div>
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
										<th>Box</th>
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
										<td v-text="inspection.box.trailer"></td>
										<td v-text="inspection.driver.first_name"></td>
										<td v-text="inspection.coordinator.first_name"></td>
										<td v-text="inspection.comments"></td>
										<td></td>
										
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
										<td></td>
						
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

@endsection

@section('scripts')
	<script type="text/javascript">
		var app = new Vue({
		  	el : '#app',
		  	data : {
		    	inspections : [],  
		    	maintenances : [],  
				base_url: '<?php echo url('/'); ?>',	
		    	id_truck: $("#id_truck").val()
		  	},
			methods: {
		  		listInspections(){
					let me = this;
		  			axios.get(this.base_url + '/inspecciones/listar/' + this.id_truck)
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
		  			axios.get(this.base_url + '/mantenimientos/listar/' + this.id_truck)
			      	.then(response => {
			      		console.log(response.data);
			        	me.maintenances = response.data;
			      	})
			      	.catch(error => {
			        	console.log(error)
			        	this.errored = true
			      	})
		  		}
			},
			mounted() {
				this.listInspections();
				this.listMaintenances();
			}
		});
	</script>
@endsection
