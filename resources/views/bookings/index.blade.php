@extends('layout')

@section('title', 'Reservas')

{{-- Content --}}
@section('content')

	<div class="container">
		<div class="col-md-12">
			<div class="row mrg-top">
				<h2 class="padding-none col-md-10"> Reservas </h2>
				<a href="{{ url('/') }}" class="btn btn-primary col-md-2"> <span class=".txt-btn">Listar Actividades</span></a>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<thead>
						<tr>
                            <th class="text-center"> ID</th>
                            <th class="text-center"> Actividad</th>
                            <th class="text-center"> Cantidad de Personas </th>
							<th class="text-center">Precio por persona</th>
							<th class="text-center">Total</th>
						</tr>
					</thead>
					<tbody>
					    @foreach( $bookings as $booking )
						    <tr data-id="{{ $booking->id }}">
	                            <td class="text-center">{{ $booking->id }}</td>
	                            <td class="text-center">{{ $booking->activity->name }}</td>
	                            <td class="text-center">{{ $booking->people_number }}</td>
	                            <td class="text-center">{{ $booking->activity->price }}</td>
	                            <td class="text-center">{{ $booking->total_price }}</td>
	                        </tr>
	                    @endforeach
                    </tbody>
				</table>
			</div>
			@if (method_exists($bookings, 'render'))
                <div class="float-right ">
                    {!! $bookings->render() !!}
                </div>
            @endif
		</div>
	</div>
@endsection
