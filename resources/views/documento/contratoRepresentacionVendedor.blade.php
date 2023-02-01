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
        <p>En <strong>{{ $documento->comprador->ciudad }}</strong>, a 29 de enero de 2023.</p>
        <div>
            <p class="sin_margin">Entre <strong>TRANSPORTES DEY SPA</strong> C.I. N° <strong>77.349.008-2</strong> domiciliado para estos efectos en <strong>ARTURO PRAT 2170B</strong>, COMUNA <strong>CONCEPCION</strong>, REGION DE <strong>MAULE</strong> representado por <strong>ESTEBAN ANDRES GOMEZ RAMOS</strong>  C.I. N° <strong>13.954.979-1</strong> como VENDEDOR Y <strong>{{ $documento->comprador->nombre }}</strong> C.I. N° <strong>{{ $documento->comprador->run }}</strong> domiciliado para estos efectos en <strong>{{ $documento->comprador->direccion }}</strong>, COMUNA RETIRO como COMPRADOR se ha convenido el siguiente contrato de compraventa:</p>
            <p class="con_margin">PRIMERO. - <strong>TRANSPORTES DEY SPA</strong> vende a <strong>{{ $documento->comprador->nombre }}</strong> quien compra y acepta para sí un vehículo Inscripción : <strong>{{ $documento->vehiculo->inscripcion }}</strong> DATOS DEL VEHICULO Tipo Vehículo : <strong>{{ $documento->vehiculo->tipo_vehiculo }}</strong> Año : <strong>{{ $documento->vehiculo->anio }}</strong> Marca : <strong>{{ $documento->vehiculo->marca }}</strong> Modelo : <strong>{{ $documento->vehiculo->modelo }}</strong> Nro. Chasis : <strong>{{ $documento->vehiculo->chasis }}</strong> Nro. Serie : <strong>{{ $documento->vehiculo->num_vim }}</strong> Color : <strong>{{ $documento->vehiculo->color }}</strong> Combustible : <strong>{{ $documento->vehiculo->combustible }}</strong> PBV : <strong>{{ $documento->vehiculo->pbv }}</strong>, con sus accesorios completos que el comprador declara haber recibido a su entera satisfacción, y después de haberlo revisado detenidamente por lo que se expresa no tener cargo alguno ni objeción de formular, declarando que renuncia expresamente a las acciones de saneamiento por vicios redhibitorios establecido en el párrafo 8 del Título XXIII del Libro IV del Código Civil. El vehículo se vende en el estado en que se encuentra y que el comprador conoce cabalmente.</p>
            <p class="con_margin">SEGUNDO. - El precio de venta es la suma de $6.000.000.- (SEIS MILLONES DE PESOS) que el comprador paga de la siguiente forma: $ 6.000.000.- en EFECTIVO. Con una tasación fiscal de $ 6.000.000.- (SEIS MILLONES DE PESOS)</p>
            <p class="con_margin">TERCERO. - Declaran los vendedores bajo juramento que el vehículo que venden no tiene deudas ni gravámenes de ninguna especie: como Prenda, Embargo o Prohibición de enajenar, Los compradores declaran por su parte que este hecho es causa determinante de esta compraventa y que ha estudiado debidamente el dominio vigente del vehículo que compra. Ambas partes liberan a los Notarios que autorizan de toda responsabilidad al respecto.</p>
            <p class="con_margin">CUARTO. - El comprador queda facultado para requerir por sí solo la anotación de esta transferencia en las oficinas correspondientes.</p>
            <p class="con_margin">QUINTO. - Los compradores, aceptan el presente vehículo en su situación y responsabilidad de multas, la cual consta en el Certificado de Multas de Tránsito Impagas del Registro Civil.</p>
            <p class="con_margin">SEXTO. - El vendedor declara expresa y juradamente, en forma individual, que ha firmado el presente instrumento, encontrándose físicamente dentro de los límites territoriales y geográficos de la comuna de <strong>PARRAL</strong> Región <strong>REGION DE MAULE</strong>  lo cual le consta fehacientemente por conocer los límites de la comuna referida.</p>
            <p class="sin_margin">Esta declaración se realiza con el objeto de cumplir con lo dispuesto por el inciso final del artículo 400 del Código Orgánico de Tribunales al momento de la autorización de la firma del presente contrato.</p>
            <p class="sin_margin">Se deja expresa constancia de que esta declaración ha sido efectuada por el vendedor con el pleno conocimiento respecto de la disposición</p>
            <p class="sin_margin">contenida en el artículo 210 del Código Penal de la República de Chile, que especifica la responsabilidad por perjurar o dar falso testimonio, asumiendo la responsabilidad legal correspondiente.</p>
            <p class="con_margin">SÉPTIMO. - El comprador declara expresa y juradamente, en forma individual, que ha firmado el presente instrumento, encontrándose físicamente dentro de los límites territoriales y geográficos de la comuna de <strong>{{ $documento->comprador->comuna }}</strong> Región <strong>{{ $documento->comprador->region }}</strong> lo cual le consta fehacientemente por conocer los límites de la comuna referida.</p>
            <p class="sin_margin">Esta declaración se realiza con el objeto de cumplir con lo dispuesto por el inciso final del artículo 400 del Código Orgánico de Tribunales al momento de la autorización de la firma del presente contrato.</p>
            <p class="sin_margin">Se deja expresa constancia de que esta declaración ha sido efectuada por el comprador con el pleno conocimiento respecto de la</p>
            <p class="sin_margin">disposición contenida en el artículo 210 del Código Penal de la República de Chile, que especifica la responsabilidad por perjurar o dar falso testimonio, asumiendo la responsabilidad legal correspondiente.</p>
            <p class="con_margin">OCTAVO. - El presente contrato tiene su validez como documento electrónico de acuerdo con la ley 19.799, el cual ha sido firmado por ambas partes mediante firma electrónica.</p>
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