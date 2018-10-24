@extends('layout')

@section('title', 'Actividades')

{{-- Content --}}
@section('content')

	<div role="main" class="main">
		<div class="container">
			<h1 class="mrg-top">Lista de Actividades</h1>
			
			<div class="list-group" style="margin-bottom: 15px">
				@foreach( $activities as $activity )
					<a href="{{ route('activity', [$activity->slug]) }}" class="list-group-item list-group-item-action hover-list">{{$activity->name}}</a>
				@endforeach
			</div>
			<a href="{{ route('index_bookings') }}" class="btn btn-primary float-right"> <span class=".txt-btn">Ver reservas</span></a>
		</div>
	</div>
@endsection
