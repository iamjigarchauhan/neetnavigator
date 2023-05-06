<div class="table-responsive" style="display: block; height:300px; overflow-y:scroll; overflow-y:scroll">
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