@extends('layouts.home')

@section('table')
	<div style="margin-bottom: 20px;">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>Area</th>
				<th>Distance, kms</th>
			</tr>
			</thead>
			<tbody>
			@foreach ($cities as $index => $distance)
				<tr>
					<td>{{ $index }}</td>
					<td>{{ $distance }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection