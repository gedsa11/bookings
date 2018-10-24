@extends('layout')

@section('title', 'Detalle Actividad')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-1" style="border-bottom: 1px solid grey; ">
			    <h1 class="mrg-top"><strong>{{ $activity->name }}</strong></h1>
			    <p>{{ $activity->description }} </p>
			    <p><strong>Precio: {{ $activity->price }} </strong></p>
			</div>
		</div>

		<div class="row mrg-top">
			<div class="col-md-6 col-md-offset-1">
			    <form id="actividadcomer" class="smart-form" action="{{url('booking')}}" method="POST">
				{{ csrf_field() }}
					<div class="row form-group">
						<div class="col-md-6">
							<label for="date">Fecha</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control datepicker" name="date">
							<input type="hidden" name="activity_id" value="{{$activity->id}}">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<label for="date">Cantidad de Personas</label>
						</div>
						<div class="col-md-6">
							<input type="number" class="form-control" name="people_number" required>
						</div>
					</div class="form-group">
						<input type="submit" class="btn btn-success large-btn" value="Reservar">

						<a href="{{url('/')}}" class=" btn btn-secondary float-right large-btn">Volver</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
