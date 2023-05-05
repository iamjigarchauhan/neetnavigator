{{-- <!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
	<!--begin::Card header-->
	<div class="card-header cursor-pointer">
		<!--begin::Card title-->
		<div class="card-title m-0">
			<h3 class="fw-bolder m-0">{{ __('Select Your Choice') }}</h3>
		</div>
		<!--end::Card title-->
	</div>
	<!--begin::Card header-->
	<!--begin::Card body-->
	
	<div class="card-body p-9"> --}}
		<div class="row mb-6">
			<table class="table text-center table-hover table-rounded table-striped border gy-7 gs-7" style="    height: 300px !important;overflow: scroll; display: block;">
				<thead>
					<tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">
						<th>
							<input type="checkbox" name="all_state_checkbox" id="all_state" class="form-check-input" value="all_state">
						</th>
						<th>State Name</th>
						<th>No. of Colleges</th>
					</tr>
				</thead>
				<tbody>
					@foreach($states as $state)
					<tr>
						<td><input type="checkbox" value="{{ $state->id }}" name="state_id[]" class="all_state form-check-input" required></td>
						<td>{{ $state->name }}</td>
						<td>{{ $state->colleges_count }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<!--begin::Input group-->
			{{-- <div class="form-floating">
					<select name="state_id" class="multiple form-select" id="" data-control="select2" multiple data-placeholder="{{ __('10th Passing State') }}" required>
							{{-- <option value="">{{ __('10th Passing State') }}</option> - -}}
							@foreach($states as $state)
							<option>{{ $state->name }}{{ $state->colleges_count }}</option>
							@endforeach
					</select>
			</div> --}}
			<!--end::Input group-->
	</div>
		{{-- <div class="row mb-6">
			<!--begin::Input group-->
			<div class="form-floating">
						
						<select class="form-control-plaintext multiple" name="state_id[]">
					@foreach($states as $state)
							<option >{{ $state->name }}{{ $state->colleges_count }}</option>
						{{-- <td><input type="checkbox" value="{{ $state->id }}" name="state_id[]" class="all_state form-check-input" required></td>
						<td>{{ $state->name }}</td>
						<td>{{ $state->colleges_count }}</td> - -}}
										@endforeach
						</select>
					
					{{-- </td></tr>
				</tbody>
			</table> - -}}
		</div>
		</div> --}}

	{{-- </div>
	<!--end::Card body-->
</div> --}}
<!--end::details View-->