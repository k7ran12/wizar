<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.37/sweetalert2.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Documento</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div style="position: relative;">
        <div style="position: absolute;right: 0;">
            <a href="{{ route('documento.index') }}" class="btn btn-primary"><i class="fa-solid fa-right-from-bracket"></i> Atras</a>
        </div>
    </div>
    <div class="container mt-3">
        <form action="{{ route('documento.update', $documento->id) }}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" value="{{ $documento->propietario_vehiculo_id  }}" name="propietario_vehiculo_id" id="propietario_vehiculo_id">
            <input type="hidden" value="{{ $documento->vehiculo_id }}" name="vehiculo_id" id="vehiculo_id">
            <input type="hidden" value="{{ $documento->firma_id }}" name="firma_id" id="firma_id">
            <input type="hidden" value="{{ $documento->comprador_id  }}" name="comprador_id" id="comprador_id">
            <div class="row mb-3">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Documento</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>F. Creacion</label>
                                        <input value="{{ $documento->fecha_creacion }}" name="fecha_creacion" type="date"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>N° Interno</label>
                                        <input value="{{ $documento->num_interno }}" name="num_interno" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>N° Incripcion</label>
                                        <input value="{{ $documento->num_inscripcion }}" name="num_inscripcion" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RUT Comprador</label>
                                        <input value="{{ $documento->rut_comprador }}" name="rut_comprador" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select name="estado" class="form-select" aria-label="Default select example">
                                            <option value="1" @if($documento->estado == 1) selected @endif>Activo</option>
                                            <option value="0" @if($documento->estado == 0) selected @endif>Inactivo</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="d-grid gap-2">
                                        <button style="margin-top: 7%" class="btn btn-success" type="submit">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Vehiculo</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>Inscripcion</label>
                                        <input value="{{ $documento->vehiculo->inscripcion }}" name="inscripcion"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>Año</label>
                                        <input value="{{ $documento->vehiculo->anio }}" name="anio" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>Tipo Vehiculo</label>
                                        <input value="{{ $documento->vehiculo->tipo_vehiculo }}" name="tipo_vehiculo"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>Marca</label>
                                        <input value="{{ $documento->vehiculo->marca }}" name="marca" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>Modelo</label>
                                        <input value="{{ $documento->vehiculo->modelo }}" name="modelo" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>N° Motor</label>
                                        <input value="{{ $documento->vehiculo->num_motor }}" name="num_motor" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>Chasis</label>
                                        <input value="{{ $documento->vehiculo->chasis }}" name="chasis" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>N° Vin</label>
                                        <input value="{{ $documento->vehiculo->num_vin }}" name="num_vin" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>Color</label>
                                        <input value="{{ $documento->vehiculo->color }}" name="color" type="text"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>Combustible</label>
                                        <input value="{{ $documento->vehiculo->combustible }}" name="combustible"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>PBV</label>
                                        <input value="{{ $documento->vehiculo->pbv }}" name="pbv" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>Instituto</label>
                                        <input value="{{ $documento->vehiculo->instituto }}" name="instituto" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>N° Poliza</label>
                                        <input value="{{ $documento->vehiculo->num_poliza }}" name="num_poliza" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>F. Vencimiento Politica</label>
                                        <input value="{{ $documento->vehiculo->fecha_vencimiento_politica }}"
                                            name="fecha_vencimiento_politica" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>Limitacion Dominio</label>
                                        <textarea class="form-control" name="limitaciones_dominio" id="limitaciones_dominio"
                                            cols="30" rows="10">{{ $documento->vehiculo->limitaciones_dominio }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label>Subincripciones</label>
                                        <textarea class="form-control" name="subincripciones" id="subincripciones" cols="30"
                                            rows="10">{{ $documento->vehiculo->subincripciones }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Firma</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Comuna</label>
                                        <input value="{{ $documento->firma->comuna }}" name="comuna_firma" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Region</label>
                                        <input value="{{ $documento->firma->region }}" name="region_firma" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h4 class="card-title">Propietario Vehiculo</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Run</label>
                                        <input value="{{ $documento->propietario_vehiculo->run }}" name="run_propietario"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input value="{{ $documento->propietario_vehiculo->nombre }}"
                                            name="nombre_propietario" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha adquision</label>
                                        <input value="{{ $documento->propietario_vehiculo->fecha_adquision }}"
                                            name="fecha_adquision_propietario" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Repertorio</label>
                                        <input value="{{ $documento->propietario_vehiculo->repertorio }}"
                                            name="repertorio_propietario" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>De fecha</label>
                                        <input value="{{ $documento->propietario_vehiculo->de_fecha }}"
                                            name="de_fecha_propietario" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Comuna</label>
                                        <input value="{{ $documento->propietario_vehiculo->comuna }}"
                                            name="comuna_propietario" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Direccion</label>
                                        <input value="{{ $documento->propietario_vehiculo->direccion }}"
                                            name="direccion_propietario" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Celular</label>
                                        <input value="{{ $documento->propietario_vehiculo->celular }}"
                                            name="celular_propietario" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input value="{{ $documento->propietario_vehiculo->email }}"
                                            name="email_propietario" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h4 class="card-title">Comprador</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Run</label>
                                        <input value="{{ $documento->comprador->run }}" name="run_comprador" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input value="{{ $documento->comprador->nombre }}" name="nombre_comprador"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>region</label>
                                        <input value="{{ $documento->comprador->region }}" name="region_comprador"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>comuna</label>
                                        <input value="{{ $documento->comprador->comuna }}" name="comuna_comprador"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ciudad</label>
                                        <input value="{{ $documento->comprador->ciudad }}" name="ciudad_comprador"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>direccion</label>
                                        <input value="{{ $documento->comprador->direccion }}" name="direccion_comprador"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>email</label>
                                        <input value="{{ $documento->comprador->email }}" name="email_comprador" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>celular</label>
                                        <input value="{{ $documento->comprador->celular }}" name="celular_comprador"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.37/sweetalert2.min.js"></script>
    <script src="{{ Vite::asset('resources/js/documento.js') }}"></script>
</body>

</html>
