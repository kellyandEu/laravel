<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{public_path('css/app.css')}}">
      
    </head>
    <body>
        
        <h1>Informe en formato PDF </h1>

        <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Fondos</th>
										<th>Montoplan</th>
										<th>Montopat</th>
										<th>Montofp</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $proyecto)
                                        <tr>
                                           
                                            
											<td>{{ $proyecto->nombre }}</td>
											<td>{{ $proyecto->fondos }}</td>
											<td>{{ $proyecto->montoplan }}</td>
											<td>{{ $proyecto->montopat }}</td>
											<td>{{ $proyecto->montofp }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

    </body>
</html>