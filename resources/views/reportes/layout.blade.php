 <!DOCTYPE html>
<html lanf="eng">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		.table, .thead, .tr, .th, .td{
			width: 100%;
			border: 1px solid;
            border-collapse: collapse;
            text-align: center;
		}
	</style>
</head>
<body>

    <strong>Universidad de El Salvador</strong><br>
    <strong>Facultad de Ingeniería y Arquitectura</strong><br>
    <strong>Sistema de Gestión de reservas de Laboratorios de Aprendizaje</strong><br><br>
    <strong>Tipo de Reporte: </strong>{{$tipoReporte}}<br>
   
    <strong> </strong><br>
    <table class="table table-striped table-bordered first">
        <thead style="background-color:black;text-align:center;">

            @if($tipoReporte == "Materia")
                <tr>
                    <th style="color:white;">Local</th>
                    <th style="color:white;">Materia</th>
                    <th style="color:white;">Cantidad de reservas por materia</th>
                </tr>
            @endif
            @if($tipoReporte == "Horario")
                <tr>
                    <th style="color:white;">Local</th>
                    <th style="color:white;">Materia</th>
                    <th style="color:white;">Horario</th>
                    <th style="color:white;">Cantidad de reservas por horario</th>
                </tr>
            @endif
            @if($tipoReporte == "Escuela")
                <tr>
                    <th style="color:white;">Local</th>
                    <th style="color:white;">Escuela</th>
                    <th style="color:white;">Cantidad de reservas por escuela</th>
                </tr>
            @endif
        </thead>
        <tbody>
            
           
        @if($tipoReporte == "Materia")   
            @foreach($porMateria as $m)
                <tr>
                    <td>{{$m->localnombre}}</td>
                    <td>{{$m->materianombre}}</td>
                    <td>{{$m->cantidad}}</td>
                </tr>
            @endforeach
        @endif

        @if($tipoReporte == "Horario")

            @foreach($porHorario as $m)
                <tr>
                    <td>{{$m->localnombre}}</td>
                    <td>{{$m->materianombre}}</td>
                    <td>{{$m->hora}}</td>
                    <td>{{$m->cantidad}}</td> 
                </tr>
            @endforeach

        @endif


        @if($tipoReporte == "Escuela")

            @foreach($porEscuela as $m)
                <tr>
                    <td>{{$m->localnombre}}</td>                  
                    <td>{{$m->escuela}}</td>
                    <td>{{$m->cantidad}}</td> 
                </tr>
            @endforeach

        @endif        
          
        </tbody>
    </table>
</body>
</html>