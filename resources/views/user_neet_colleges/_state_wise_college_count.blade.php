<style>
	.table-responsive{height:350px !important}
	.table thead th {vertical-align: text-top !important;}
	thead{position: sticky;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    z-index: 9;
    background-color: white;}
</style>
<div class="table-responsive border">
	<table class="statelist table table-hover table-rounded border gy-7 gs-7">
		<thead>
			<tr>
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
</div>
<p class="">&nbsp;</p>