<?php 
    $name="Gobierno de El Salvador";
    $institucion="Defensoría del Consumidor";
    $autor = "Marco Antonio Andrade";
    $fecha_actual = date("d-m-Y h:i:s");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gobierno de El Salvador</title>
</head>
<body>
    <h1 style="text-align:center"><?php echo $name?></h1>
    <hr>
    <h2><?php echo $institucion?></h2>
    <div style="display:flex">
        <div>Autor: <?php echo $autor?></div>
        <div>Fecha: <?php echo $fecha_actual?></div>
    </div>
    <hr>
    <table class="table-auto w-full"  cellpadding="4" cellspacing="5">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr bgcolor="gray" style="color:white">
                                    <th class="px-4 py-2">{{ __('Nombre de Proyecto') }}</th>
                                    <th class="px-4 py-2">{{ __('Fuente Fondos') }}</th>
                                    <th class="px-4 py-2">{{ __('Monto Planificado') }}</th>
                                    <th class="px-4 py-2">{{ __('Monto Patrocinado') }}</th>
                                    <th class="px-4 py-2">{{ __('Monto Fondos Propios') }}</th>
                                  
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                @forelse ($projects as $project)
                                    <tr style="text-align:center">
                                        <td class="border px-4 py-2">{{ $project->NombreProyecto }}</td>
                                        <td class="border px-4 py-2">{{ $project->fuenteFondos }}</td>
                                        <td class="border px-4 py-2">{{ $project->montoPlanificado }}</td>
                                        <td class="border px-4 py-2">{{ $project->montoPatrocinado }}</td>
                                        <td class="border px-4 py-2">{{ $project->montoFondosPropios }}</td>
              
                                    </tr>
                                @empty
                                    <tr class="bg-red-500 text-white text-center">
                                        <td colspan="6" class="border px-4 py-2">{{ __('No hay proyectos para mostrar') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            @if ($projects->hasPages())
                                <tfoot class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                    <tr>
                                        <td colspan="3" class="border px-4 py-2">
                                            {{ $projects->links() }}
                                        </td>
                                    </tr>
                                </tfoot>
                            @endif
                        </table>

    
</body>
</html>