@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Lista de Servicios</h1>
	<a class="btn btn-primary" href="{{ url('admin/Servicios/create') }}"> Mostrar</a>
		<table class="table">
			<thead>
				<tr>
                    <th>Nombre</th>
					<th>Fecha</th>
					<th>estado</th>
					<th>TipoServicio</th>
					<th>Accion</th>
					
				</tr>
			</thead>
			<tbody>
		@foreach ($datos[0] as $s)
	            <tr>
                   <!-- @foreach ($datos[1] as $o)
                        @if ($o->id == $s->TipoServicio_id)
                            <td width="90s"><img src="../imagen/tiposservicios/{{$o->foto}}" class="img-responsive"></td>
                        @endif
                    @endforeach
                    
                    @foreach ($datos[1] as $j)
                        @if ($j->id == $s->reserva_id)
                            <td width="90s"><img src="../imagen/tiporeserva/{{$j->foto}}" class="img-responsive"></td>
                        @endif
                    @endforeach-->
			        <td>{{$s->nomservicio}}</td>
			        <td>{{$s->fecha}} </td>
	                <td>{{$s->estado}}</td>
	                <td>{{$s->TipoServicio_id}}</td>
	                <td>
	               		 <a class="btn btn-info" href="{{route('admin.Servicios.edit', $s->id)}}"   >E</a>
	                  	 <a onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" href="{{ route('admin.Servicios.destroy', $s->id) }}"   >X</a>
	 		   
	                	<!--<button class="btn btn-success">E</button>
	                	<button class="btn btn-danger">X</button>-->
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
