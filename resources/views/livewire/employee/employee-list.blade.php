<div class="content">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-12">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
					<li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
					<li class="breadcrumb-item active">Employee List</li>
				</ul>
			</div>
		</div>
	</div>
	<livewire:flash-message.flash-message />
	<div class="row d-flex justify-content-center">
		<div class="col-sm-12">
			<div class="card card-table show-entire">
				<div class="card-body">
					<div class="page-table-header mb-2">
						<div class="row align-items-center">
							<div class="col">
								<div class="doctor-table-blk">
									<h3>Employee List</h3>
									<div class="doctor-search-blk">
										<div class="add-group">
										@if(auth()->user()->hasRole('admin'))
											<a wire:click="createEmployee" class="btn btn-primary ms-2"><img src="{{ asset('assets/img/icons/plus.svg') }}" alt>
											</a>
										@endif
										</div>
									</div>
								</div>
							</div>
							<div class="col-auto text-end float-end ms-auto download-grp">
								<div class="top-nav-search table-search-blk">
									<form>
										<input type="text" class="form-control" placeholder="Search here" wire:model.debounce.500ms="search" name="search">
										<a class="btn"><img src="{{ asset('assets/img/icons/search-normal.svg') }}" alt></a>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="row">
							<div class="col-sm-2">

							</div>
							<div class="col-sm-2">

							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table border-0 custom-table comman-table datatable mb-0">
							<thead>
								<tr style="background: linear-gradient(to right, #3498db, #2e37a4); color:white;">
									<th style="width: 30%;color:white;">Name</th>
									<th style="width: 25%;color:white;">Email</th>
									<th style="color:white;">Position</th>
									<th style="width: 30%; color:white;text-align: center;">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($employees as $employee)
								<tr>
									<td class="text-capitalize">
										{{ $employee->first_name }} {{ $employee->middle_name ?? '' }}
										{{ $employee->last_name }}
									</td>
									<td>
										{{ $employee->email }}
									</td>
									<td>
										{{ $employee->position->description ?? '' }}
									</td>
						
									<td class="text-center">
										<div class="btn-group" role="group">
											<button type="button" class="btn btn-primary btn-sm mx-1" wire:click="editUser({{ $employee->id }})" title="Edit">
												<i class='fa fa-pen-to-square'></i>
											</button>

											<a class="btn btn-danger btn-sm mx-1" wire:click="deleteUser({{ $employee->id }})" title="Delete">
												<i class="fa fa-trash"></i>
											</a>
										</div>
																				</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		@if(auth()->user()->hasRole('admin'))
		{{-- Modal --}}
		<div wire.ignore.self class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="employeeModal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<livewire:employee.employee-form />
			</div>
		</div>
		@section('custom_script')
		@include('layouts.scripts.employee-scripts')
		@endsection
		@endif