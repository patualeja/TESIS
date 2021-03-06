@extends('layouts.master')

@section('content')
<!-- Begin page heading -->
<h1 class="page-heading">CAMPAÑAS</h1>
<!-- End page heading -->

<!-- BEGIN DATA TABLE -->
<div class="the-box">
	<div class="table-responsive">
		<table class="table table-striped table-hover" id="datatable-example">
			<thead class="the-box dark full">
				<tr>
					<th>Empresa</th>
					<th>Descripción</th>
					<th>Inicio</th>
					<th>Fin</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
		<tbody>
		@foreach($campains as $campain)
			<tr class="odd gradeA">
				<td>{{ $campain->company->name }}</td>
				<td>{{ $campain->description }}</td>
				<td>{{ $campain->start_at }}</td>
				<td>{{ $campain->end_at }}</td>
				<td>{!! HTML::linkRoute('campain.edit', 'Ver', array($campain->id)) !!}</td>
				<td>
					<form role="form" method="POST" action="/campain/{{ $campain->id }}">
						<input name="_method" type="hidden" value="DELETE">
						<button type="submit" >ELIMINAR</button>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</form>
				</td>
			</tr>
		@endforeach
		</table>
	</div>
</div>
@stop
