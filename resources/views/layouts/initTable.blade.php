@extends('layouts.home')

@section('table')
	<div style="margin-bottom: 20px;">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>Area</th>
				<th>Latitude</th>
				<th>Longitude</th>
			</tr>
			</thead>
			<tbody>
			@foreach ($cities as $index => $city)
				<tr>
					<td>{{ $index }}</td>
					<td>{{ $city['lat'] }}</td>
					<td>{{ $city['long'] }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection