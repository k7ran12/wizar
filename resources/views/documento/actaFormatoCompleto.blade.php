<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            margin: 0 20px;
        }

        p {
            text-align: justify;
        }

        p.primeralinea {
            text-indent: 60px;
        }

        h1 {
            text-align: center;
        }
        .firma{
            position: absolute;
            bottom: 0;
        }
        h5{
            text-align: center;
        }
        .divdos{
            margin: 80px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>ACTA</h1>
        <div>
            <p class="primeralinea"><strong>EN PARRAL</strong>, 29 de enero de 2023, RODRIGO ANDRES FUENTES TAPIA, MARTILLERO PUBLICO, VIENE A CERTIFICAR LA CONSIGNACION DEL VEHICULO <strong>Inscripción</strong> : <strong>{{ $documento->vehiculo->inscripcion }}</strong> <strong>DATOS DEL VEHICULO</strong> <strong>Tipo Vehículo</strong> : <strong>{{ $documento->vehiculo->tipo_vehiculo }}</strong> <strong>Año : {{ $documento->vehiculo->anio }}</strong> <strong>Marca</strong> : <strong>{{ $documento->vehiculo->marca }}</strong> <strong>Modelo</strong> : <strong>{{ $documento->vehiculo->modelo }}</strong> <strong>Nro. Motor : {{ $documento->vehiculo->num_motor }}</strong> <strong>Nro. Chasis</strong> : <strong>{{ $documento->vehiculo->chasis }}</strong> <strong>Color</strong> : <strong>{{ $documento->vehiculo->color }}</strong> <strong>MICA</strong>, REALIZADA POR <strong>{{ $documento->propietario_vehiculo->nombre }}</strong> <strong>C.I.: {{ $documento->propietario_vehiculo->run }}</strong>, QUIEN HA AUTORIZADO PARA VENDER EN FORMA DIRECTA, LICITAR O SUBASTAR EL VEHICULO ANTES INDIVIDUALIZADO EN SU CALIDAD DE BIEN MUEBLE.</p>
            <p class="primeralinea">CERTIFICO QUE SE ADJUDICO EL VEHICULO A <strong>{{ $documento->comprador->nombre }}</strong> <strong> <strong>C.I. : {{ $documento->comprador->run }}</strong></strong>, PARA CUYOS EFECTOS SE CUMPLIO CON LA FORMALIDAD DEL ACTA RESPECTIVA, PAGO DE COMISION Y PAGO DE FORMULARIO 23, FIRMA DE CANCELACION Y CONSIGNACION POR CUENTA DEL CONSIGNATARIO.</p>
            <p class="primeralinea">DOCUMENTO EXTENDIDO PARA SER PRESENTADO EN EL REGISTRO CIVIL, ES CUANTO PUEDO INFORMAR, SI LO TIENE A BIEN.</p>
        </div>
        <div class="divdos">
            <p style="text-align: right;"><strong>RODRIGO ANDRES FUENTES TAPIA</strong></p>
            <p style="text-align: right;"><strong>13.577.538-K</strong></p>
        </div>
        <div>
            <h5>CONSIGNACION Y CANCELACION</h5>
            <p class="primeralinea">{{ $documento->propietario_vehiculo->nombre }} <strong>C.I.: {{ $documento->propietario_vehiculo->run }}</strong>, VIENE EN CERTIFICAR Y DECLARAR EXPRESAMENTE QUE CONSIGNO Y RECIBIO DE RODRIGO ANDRES FUENTES TAPIA, MARTILLERO PUBLICO, LA LIQUIDACION DEL VEHICULO <strong>Inscripción</strong> : <strong>XS.6379-0</strong> <strong>DATOS DEL VEHICULO</strong> <strong>Tipo Vehículo</strong> : <strong>{{ $documento->vehiculo->tipo_vehiculo }}</strong> <strong>Año : {{ $documento->vehiculo->anio }}</strong>  <strong>Marca</strong> : <strong>{{ $documento->vehiculo->marca }}</strong> <strong>Modelo</strong> : <strong>{{ $documento->vehiculo->modelo }}</strong> <strong>Nro. Motor : {{ $documento->vehiculo->num_motor }} </strong>  <strong>Nro. Chasis</strong> : <strong>{{ $documento->vehiculo->chasis }}</strong> <strong>Color</strong> : <strong>{{ $documento->vehiculo->color }}</strong> <strong>MICA</strong>, RECIBIENDO EL TOTAL DE LA VENTA $2.121.454.- (<strong>DOS MILLONES CIENTO VEINTIUN MIL CUATROCIENTOS CINCUENTA Y CUATRO PESOS</strong>) NO TENIENDO RECLAMO ALGUNO QUE FORMULAR.</p>
        </div>
        <div class="firma">
            <p><strong>{{ $documento->propietario_vehiculo->nombre }}</strong> <strong>C.I. : {{ $documento->propietario_vehiculo->run }}</strong> <span>_____________________</span></p>
        </div>
    </div>
</body>

</html>