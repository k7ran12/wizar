<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.37/sweetalert2.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="content">
        <!--content inner-->
        <div class="content__inner">
            <div class="container">
                <!--content title-->
                <h2 class="content__title content__title--m-sm">Wizar</h2>
                <!--animations form-->
                <form class="pick-animation my-4">
                    <div class="form-row">
                        <div class="col-5 m-auto">
                            <label for="documento_pdf" class="form-label">Cargar el PDF</label>
                            <input class="form-control" type="file" id="documento_pdf">
                        </div>
                    </div>
                </form>
                <!--content title-->
                <h2 class="content__title">Formulario</h2>
            </div>
            <div class="container overflow-hidden">
                <!--multisteps-form-->
                <div class="multisteps-form">
                    <!--progress bar-->
                    <div class="row">
                        <div class="col-12 col-lg-10 ml-auto mr-auto mb-4">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                    title="Datos vehículo">Datos vehículo</button>
                                <button class="multisteps-form__progress-btn" type="button" title="LUGAR DE FIRMA">LUGAR
                                    DE FIRMA</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                    title="DATOS DEL VEHICULO">DATOS DEL VEHICULO</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                    title="LIMITACIONES DEL VEHICULO">LIMITACIONES DEL VEHICULO
                                </button>
                                <button class="multisteps-form__progress-btn" type="button"
                                    title="SUBINSCRIPCIONES">SUBINSCRIPCIONES
                                </button>
                                <button class="multisteps-form__progress-btn" type="button"
                                    title="DATOS DEL COMPRADOR">DATOS DEL COMPRADOR
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form class="multisteps-form__form">
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">DATOS PROPIETARIO VEHICULO</h3>
                                    <div class="multisteps-form__content">
                                        <div class="form-row mt-4">
                                            <div class="col-6 col-sm-6">
                                                <label for="">RUN</label>
                                                <input id="run" class="multisteps-form__input form-control" type="text"
                                                    placeholder="RUN" />
                                            </div>
                                            <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                                                <label for="">Nombre</label>
                                                <input id="nombre" class="multisteps-form__input form-control"
                                                    type="text" placeholder="nombre" />
                                            </div>
                                            <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                                                <label for="">Fecha adquisión</label>
                                                <input id="fecha_adquision" class="multisteps-form__input form-control"
                                                    type="date" placeholder="Digite la fecha de aquisión" />
                                            </div>
                                            <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                                                <label for="">Repertorio</label>
                                                <input id="repertorio" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Digite el repertorio" />
                                            </div>
                                            <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                                                <label for="">Numero</label>
                                                <input id="numero" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Digite el numero" />
                                            </div>
                                            <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                                                <label for="">De fecha</label>
                                                <input id="de_fecha" class="multisteps-form__input form-control"
                                                    type="date" placeholder="De fecha" />
                                            </div>
                                            <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                                                <label for="">COMUNA</label>
                                                <input id="comuna" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Digite la Comuna" />
                                            </div>
                                            <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                                                <label for="">DIRECCION</label>
                                                <input id="direccion" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Digite la direccion" />
                                            </div>
                                            <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                                                <label for="">CELULAR</label>
                                                <input id="celular" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Digite el numero de celular" />
                                            </div>
                                            <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                                                <label for="">EMAIL</label>
                                                <input id="email" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Digite el correo" />
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">LUGAR DE FIRMA</h3>
                                    <div class="multisteps-form__content">
                                        <div class="form-row mt-4">
                                            <div class="col-md-6">
                                                <label for="">Región</label>
                                                <input id="region_firma" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Region" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Comuna</label>
                                                <input id="comuna_firma" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Comuna" />
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">DATOS DEL VEHICULO</h3>
                                    <div class="multisteps-form__content">
                                        <div class="form-row mt-4">
                                            <div class="col-md-6">
                                                <label for="inscripcion">Inscripción</label>
                                                <input id="inscripcion" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Inscripción" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="tipo_vehiculo">Tipo de vehiculo</label>
                                                <input id="tipo_vehiculo" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Tipo de vehiculo" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="marca">Marca</label>
                                                <input id="marca" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Tipo de vehiculo" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="modelo">Modelo</label>
                                                <input id="modelo" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Modelo" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="num_motor">N° Motor</label>
                                                <input id="num_motor" class="multisteps-form__input form-control"
                                                    type="text" placeholder="N° Motor" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="num_chasis">N° chasis</label>
                                                <input id="num_chasis" class="multisteps-form__input form-control"
                                                    type="text" placeholder="N° chasis" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="num_vin">Nro. Vin</label>
                                                <input id="num_vin" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Nro. Vin" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="Color">Color</label>
                                                <input id="color" class="multisteps-form__input form-control"
                                                    type="text" placeholder="color" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="combustible">Combustible</label>
                                                <input id="combustible" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Combustible" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="pbv">PBV</label>
                                                <input id="pbv" class="multisteps-form__input form-control" type="text"
                                                    placeholder="PBV" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="instituto">Instituto</label>
                                                <input id="instituto" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Instituto" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="num_poliza">N póliza</label>
                                                <input id="num_poliza" class="multisteps-form__input form-control"
                                                    type="text" placeholder="N póliza" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="fecha_vencimiento_politica">Fecha vencimiento
                                                    política</label>
                                                <input id="fecha_vencimiento_politica"
                                                    class="multisteps-form__input form-control" type="date"
                                                    placeholder="Fecha vencimiento política" />
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">LIMITACIONES DEL VEHICULO</h3>
                                    <div class="multisteps-form__content">
                                        <div class="form-row mt-4">
                                            <div class="col-md-12">
                                                <label for="limitacion_dominio">Limitaciones al dominio</label>
                                                <textarea class="form-control" id="limitacion_dominio" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">SUBINSCRIPCIONES</h3>
                                    <div class="multisteps-form__content">
                                        <div class="form-row mt-4">
                                            <div class="col-md-12">
                                                <label for="subinscripciones">Subincripciones</label>
                                                <textarea class="form-control" id="subinscripciones" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">DATOS DEL COMPRADOR</h3>
                                    <div class="multisteps-form__content">
                                        <div class="form-row mt-4">
                                            <div class="col-md-6">
                                                <label for="">RUN</label>
                                                <input id="run_comprador" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Run" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Nombre</label>
                                                <input id="nombre_comprador" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Nombre" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Región</label>
                                                <input id="region_comprador" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Región" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Comuna</label>
                                                <input id="comuna_comprado" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Comuna" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Ciudad</label>
                                                <input id="ciudad_comprador" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Ciudad" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Direccion</label>
                                                <input id="direccion_comprado" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Direccion" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Email</label>
                                                <input id="email_comprado" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Email" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Celular</label>
                                                <input id="celular_comprador" class="multisteps-form__input form-control"
                                                    type="text" placeholder="Celular" />
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button onclick="guardarDocumento()" class="btn btn-success ml-auto" type="button"
                                                title="Send">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.37/sweetalert2.min.js"></script>
    <script src="{{ Vite::asset('resources/js/wizar.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/documento.js') }}"></script>
</body>

</html>
