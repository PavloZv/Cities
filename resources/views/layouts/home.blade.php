@extends('layouts.app')

@section('title', 'Cities')

@section('links')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
@endsection

@section('content')

	<h1 class="text-center" style="margin-bottom: 25px;">Cities</h1>

	<div>
		<form style="display: flex; justify-content: flex-start; margin-bottom: 30px;"
			  action="{{route('filtered')}}" method="POST" enctype="multipart/form-data"
		>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group" style="margin-right: 15px;">
				<label style="margin-right: 5px;" for="location">Your location:</label>
				<select id="location" name="location" style="min-width: 100px;">
					<option value="">-</option>
					@foreach ($citiesName as $cityName)
						<option value="{{$cityName}}"
								@if ($selectedCity === $cityName)
								selected="selected"
								@endif
						>{{$cityName}}</option>
					@endforeach
				</select>
			</div>
			<button style="padding-top: 0; padding-bottom: 0; height: 20px;" type="submit" class="btn btn-default">
				Filter
			</button>
		</form>
	</div>

	@yield('table')

@endsection

@section('scripts')
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection