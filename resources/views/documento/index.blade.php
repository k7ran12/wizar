@extends('layouts.app')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="container">
    <div class="card mt-3">
        <center>
            <h1>Documentos</h1>
        </center>
        <div class="card-body">
            <table id="tabla_documento" style="width:100%" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">N° Interno</th>
                        <th scope="col">N° Inscripcion</th>
                        <th scope="col">Rut Comprador</th>
                        <th scope="col">Limitaciones</th>
                        <th scope="col">Subincripciones</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($documentos as $documento)
                    <tr>
                        <th scope="row">{{ $documento->id}}</th>
                        <td>{{ $documento->fecha_creacion }}</td>
                        <td>{{ $documento->num_interno}}</td>
                        <td>{{ $documento->num_inscripcion}}</td>
                        <td>{{ $documento->rut_comprador}}</td>
                        <td>
                            @if($documento->vehiculo->limitaciones_dominio != null)
                            <i style="color: green" class="fa-solid fa-check"></i>
                            @else
                            <i style="color: red" class="fa-solid fa-xmark"></i>
                            @endif
                        </td>
                        <td>
                            @if($documento->vehiculo->subincripciones)
                            <i style="color: green" class="fa-solid fa-check"></i>
                            @else
                            <i style="color: red" class="fa-solid fa-xmark"></i>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('documento.edit', $documento->id) }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                            <form id="eliminar_documento" action="{{ route('documento.destroy', $documento->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button onclick="eliminarDocumento(this)" class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Documentos
                                </button>
                                <ul class="dropdown-menu" style="text-align: center;">
                                    <li><a target="_blank" href="{{ route('contrato', $documento->id) }}" class="btn btn-primary w-100 mb-2">MANDATO ESPECIAL E IRREVOCABLE <i class="fa-solid fa-file-pdf"></i></a></li>
                                    <li><a target="_blank" href="{{ route('actaformatocompleto', $documento->id) }}" class="btn btn-primary w-100 mb-2">ACTA FORMATO COMPLETO <i class="fa-solid fa-file-pdf"></i></a></li>
                                    <li><a target="_blank" href="{{ route('actaconrepresentacion', $documento->id) }}" class="btn btn-primary w-100 mb-2">ACTA CON REPRESENTACIÓN <i class="fa-solid fa-file-pdf"></i></a></li>
                                    <li><a target="_blank" href="{{ route('contratocomprapara', $documento->id) }}" class="btn btn-primary w-100 mb-2">CONTRATO COMPRA PARA <i class="fa-solid fa-file-pdf"></i></a></li>
                                    <li><a target="_blank" href="{{ route('contratodecompraventa', $documento->id) }}" class="btn btn-primary w-100 mb-2">CONTRATO DE COMPRA VENTA <i class="fa-solid fa-file-pdf"></i></a></li>
                                    <li><a target="_blank" href="{{ route('contratopresentacionvendedorcomprador', $documento->id) }}" class="btn btn-primary w-100 mb-2">CONTRATO PRESENTACIÓN VENDEDOR COMPRADO <i class="fa-solid fa-file-pdf"></i></a></li>
                                    <li><a target="_blank" href="{{ route('contratorepresentacionvendedor', $documento->id) }}" class="btn btn-primary w-100 mb-2">CONTRATO REPRESENTACIÓN VENDEDOR contratoRepresentacionVendedor <i class="fa-solid fa-file-pdf"></i></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tabla_documento').DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
        });
    });
</script>
<script src="{{ Vite::asset('resources/js/documento.js') }}"></script>
@endsection