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
            <p class="primeralinea"><strong>EN PARRAL</strong>, 29 de enero de 2023, RODRIGO ANDRES FUENTES TAPIA, MARTILLERO PUBLICO, VIENE A CERTIFICAR LA CONSIGNACION DEL VEHICULO <strong>Inscripción</strong> : <strong>{{ $documento->vehiculo->inscripcion }}</strong> <strong>DATOS DEL VEHICULO</strong> <strong>Tipo Vehículo</strong> : <strong>{{ $documento->vehiculo->tipo_vehiculo }}</strong> Año : <strong>{{ $documento->vehiculo->anio }}</strong> <strong>Marca</strong> : <strong>{{ $documento->vehiculo->marca }}</strong> <strong>Modelo</strong> : <strong>{{ $documento->vehiculo->modelo }}</strong> Nro. Motor : <strong>{{ $documento->vehiculo->num_motor }}</strong> <strong>Nro. Chasis</strong> : <strong>{{ $documento->vehiculo->chasis }}</strong> <strong>Color</strong> : <strong>{{ $documento->vehiculo->color }}</strong> <strong>MICA</strong>, REALIZADA POR <strong>RICHARD ANTONIO ORTEGA AGURTO</strong> <strong>C.I.: 17.987.717-1</strong>, QUIEN HA AUTORIZADO PARA VENDER EN FORMA DIRECTA, LICITAR O SUBASTAR EL VEHICULO ANTES INDIVIDUALIZADO EN SU CALIDAD DE BIEN MUEBLE.</p>
            <p class="primeralinea">CERTIFICO QUE SE ADJUDICO EL VEHICULO A EMILIO JOSE SOTO CONTRERAS C.I.: 17.332.161-9, PARA CUYOS EFECTOS SE CUMPLIO CON LA FORMALIDAD DEL ACTA RESPECTIVA, PAGO DE COMISION Y PAGO DE FORMULARIO 23, FIRMA DE CANCELACION Y CONSIGNACION POR CUENTA DEL CONSIGNATARIO.</p>
            <p class="primeralinea">DOCUMENTO EXTENDIDO PARA SER PRESENTADO EN EL REGISTRO CIVIL, ES CUANTO PUEDO INFORMAR, SI LO TIENE A BIEN.</p>
        </div>
        <div class="divdos">
            <p style="text-align: right;"><strong>RODRIGO ANDRES FUENTES TAPIA</strong></p>
            <p style="text-align: right;"><strong>13.577.538-K</strong></p>
        </div>
        <div>
            <h5>CONSIGNACION Y CANCELACION</h5>
            <p class="primeralinea">EMILIO JOSE SOTO CONTRERAS C.I.: 17.332.161-9 EN REPRESENTACION DE JONATAN SEBASTIÁN MEDINA MARTÍNEZ C.I.: 16.563.409-8, VIENE EN CERTIFICAR Y DECLARAR EXPRESAMENTE QUE CONSIGNO Y RECIBIO DE RODRIGO ANDRES FUENTES TAPIA, MARTILLERO PUBLICO, LA LIQUIDACION DEL VEHICULO Inscripción : <strong>{{ $documento->vehiculo->inscripcion }}</strong> Tipo Vehículo : <strong>{{ $documento->vehiculo->tipo_vehiculo }}</strong> Año : <strong>{{ $documento->vehiculo->anio }}</strong> Marca : <strong>{{ $documento->vehiculo->marca }}</strong> Modelo : <strong>{{ $documento->vehiculo->modelo }}</strong> Nro. Motor : <strong>{{ $documento->vehiculo->num_motor }}</strong> Nro. Chasis : <strong>chasis</strong> Color : <strong>{{ $documento->vehiculo->color }}</strong>, RECIBIENDO EL TOTAL DE LA VENTA $336.752.- (TRESCIENTOS TREINTA Y SEIS MIL SETECIENTOS CINCUENTA Y DOS PESOS) NO TENIENDO RECLAMO ALGUNO QUE FORMULAR.</p>
        </div>
        <div class="firma">
            <p><strong>RICHARD ANTONIO ORTEGA AGURTO</strong> <strong>C.I. : 17.987.717-1</strong> <span>_____________________</span></p>
            <p><strong>JONATAN SEBASTIÁN MEDINA MARTÍNEZ  C.I. : 16.563.409-8</strong></p>
        </div>
    </div>
</body>

</html>