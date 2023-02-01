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

        .firma {
            position: absolute;
            bottom: 0;
        }

        h5 {
            text-align: center;
        }

        .divdos {
            margin: 80px 0;
        }

        .sin_margin {
            margin: 10px 0;
        }

        .con_margin {
            margin: 30px 0;
        }
        .firma > div{
            display: flex;
            flex-direction: row;
            align-items: center;
            text-align: center;
        }
        table{
            width: 100%;
        }
        table tr td{
            width: 300px;
            text-align: center;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>CONTRATO DE COMPRAVENTA</h1>
        <p>En <strong>{{ $documento->comprador->ciudad }}</strong>, a 29 de enero de 2023</p>
        <div>
            <p class="con_margin">Entre <strong>MARCELO TRISTIAM AGUILERA FERNÁNDEZ</strong> C.I. N° <strong>11.531.691-5</strong> domiciliado para estos efectos en <strong>CALLEJON LOS CEREZOS S/N MAITENES</strong>, COMUNA RETIRO, como VENDEDOR Y <strong>{{ $documento->comprador->nombre }}</strong> C.I. N° <strong>{{ $documento->comprador->run }}</strong> domiciliado para estos efectos en <strong>{{ $documento->comprador->direccion }}</strong>, COMUNA <strong>{{ $documento->comprador->comuna }}</strong> como COMPRADOR se ha convenido el siguiente contrato de compraventa:</p>
            <p class="con_margin">PRIMERO. - <strong>MARCELO TRISTIAM AGUILERA FERNÁNDEZ</strong> vende a <strong>{{ $documento->comprador->nombre }}</strong> quien compra y acepta para <strong>{{ $documento->comprador->nombre }}</strong> <strong>{{ $documento->comprador->run }}</strong> sí un vehículo Inscripción : <strong>{{ $documento->vehiculo->inscripcion }}</strong> Tipo Vehículo : <strong>{{ $documento->vehiculo->tipo_vehiculo }}</strong> Año : <strong>{{ $documento->vehiculo->anio }}</strong> Marca : <strong>{{ $documento->vehiculo->marca }}</strong> Modelo : <strong>{{ $documento->vehiculo->modelo }}</strong> Nro. Motor : <strong>{{ $documento->vehiculo->num_motor }}</strong> Nro. Chasis : <strong>{{ $documento->vehiculo->chasis }}</strong> Color : <strong>{{ $documento->vehiculo->color }}</strong>, con sus accesorios completos que el comprador declara haber recibido a su entera satisfacción, y después de haberlo revisado detenidamente por lo que se expresa no tener cargo alguno ni objeción de formular, declarando que renuncia expresamente a las acciones de saneamiento por vicios redhibitorios establecido en el párrafo 8 del Título XXIII del Libro IV del Código Civil. El vehículo se vende en el estado en que se encuentra y que el comprador conoce cabalmente.</p>
            <p class="con_margin">SEGUNDO. - El precio de venta es la suma de $2.466.152.- (DOS MILLONES CUATROCIENTOS SESENTA Y SEIS MIL CIENTO CINCUENTA Y DOS PESOS) que el comprador paga de la siguiente forma: $ 2.466.152.- en EFECTIVO. Con una tasación fiscal de $ 2.466.152.- (DOS MILLONES CUATROCIENTOS SESENTA Y SEIS MIL CIENTO CINCUENTA Y DOS PESOS)</p>
            <p class="con_margin">TERCERO. - Declaran los vendedores bajo juramento que el vehículo que venden no tiene deudas ni gravámenes de ninguna especie: como Prenda, Embargo o Prohibición de enajenar, Los compradores declaran por su parte que este hecho es causa determinante de esta compraventa y que ha estudiado debidamente el dominio vigente del vehículo que compra. Ambas partes liberan a los Notarios que autorizan de toda responsabilidad al respecto.</p>
            <p class="con_margin">CUARTO. - El comprador queda facultado para requerir por sí solo la anotación de esta transferencia en las oficinas correspondientes.</p>
            <p class="con_margin">QUINTO. - Los compradores, aceptan el presente vehículo en su situación y responsabilidad de multas, la cual consta en el Certificado de Multas de Tránsito Impagas del Registro Civil.</p>
            <p class="con_margin">SEXTO. - El presente contrato tiene su validez como documento electrónico de acuerdo con la ley 19.799, el cual ha sido firmado por ambas partes mediante firma electrónica.</p>
        </div>
        <div class="firma">
            <table>
                <tr>
                    <td><strong>AUTOFACT CHILE SpA</strong></td>
                    <td><strong>{{ $documento->comprador->nombre }}</strong></td>
                </tr>
                <tr>
                    <td>C.I. N° <strong>76.197.647-8</strong></td>
                    <td>C.I. N°</td>
                </tr>
                <tr>
                    <td><strong>{{ $documento->comprador->run }}</strong></td>
                    <td>C.P. <strong>{{ $documento->comprador->run }}</strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>_________________________</td>
                    <td>_________________________</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>