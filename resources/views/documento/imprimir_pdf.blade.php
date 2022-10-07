{{ header("Content-type:application/pdf");}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <style>

        @font-face {
            font-family: 'HelveticaLTThaiW31Regular';
            src: url('resources/fonts/HelveticaLTThaiW31Regular.ttf') format('truetype');
            font-style: normal;
            font-weight: normal;
        }

        * {
            border: 0;
            font-family: 'HelveticaLTThaiW31Regular';
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
        }

        h5 {
            font-size: 1.1em;
        }

        h6 {
            margin-top: 10px;
            font-size: 0.8em;
        }

        p {
            font-size: 0.8em;
            margin: 10px 0 10px 0;
            text-align: justify !important;
        }
        strong>u{
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div style="position: absolute;transform: rotate(90deg);top: 50%;right: -42% !important;width: auto;">
        <p style="margin: 0 !important;">Documento firmado electrónicamente de acuerdo a la ley N° 19.799. Puede validar
            y descargar este documento en
        </p>
        <p style="margin: 0 !important;"><a
                href="https://doc.autofactpro.com/SDOC4KZwxQsZQ">https://doc.autofactpro.com/SDOC4KZwxQsZQ</a> o
            directamente a través del código QR
        </p>
    </div>
    <div style="margin: 0 40px;">
        <div>
            <center>
                <h5><u>MANDATO ESPECIAL E IRREVOCABLE</u></h5>
            </center>
            <center>
                <h6>{{ $documento->comprador->nombre }}</h6>
            </center>
            <center>
                <h6>A</h6>
            </center>
            <center>
                <h6>AUTOFACT CHILE SpA</h6>
            </center>
        </div>
        <p>
            En Santiago de Chile, a <strong><u>03</u></strong> de <strong><u>SEPTIEMBRE</u></strong> de
            <strong><u>2022</u></strong>, comparecen: <strong><u>{{ $documento->comprador->nombre }}</u></strong> R U T
            <strong><u>{{ $documento->comprador->run }}</u></strong>
            domiciliado para estos efectos en <strong><u>{{ $documento->comprador->direccion }}</u></strong> en
            adelante
            también el <strong><u>“Mandante”</u></strong>; quien actuando en plenitud de sus facultades, viene en
            otorgar el siguiente mandato
            irrevocable de compraventa de
            vehículo motorizado y facultades accesorias:
        </p>
        <p>
            <strong><u>PRIMERO:</u></strong> <strong>Mandato</strong>. Por el presente, el Mandante otorga mandato
            especial e irrevocable a <strong>Autofact Chile SpA</strong>, Rol
            Único Tributario
            76.197.647-8, domiciliado para estos efectos en Av. Providencia 2019, Oficina 41 A, Comuna de Providencia,
            Región Metropolitana, en
            adelante también la <strong><u>“Mandataria”</u></strong>, para que la misma, a través de cualquiera de sus
            representantes o quienes
            ellos designen, en su nombre
            y representación, venda y/o compre, ceda y transfiera, el siguiente vehículo (en adelante el “Vehículo”):
            <strong>Tipo
                de Vehículo</strong>: <strong><u>{{ $documento->vehiculo->tipo_vehiculo }}</u></strong>, <strong>Marca:</strong>
            <strong><u>{{ $documento->vehiculo->marca }}</u></strong>, <strong>Modelo</strong>: <strong><u>{{ $documento->vehiculo->modelo }}</u></strong>,
            <strong>Color:</strong> <strong><u>{{ $documento->vehiculo->color }}</u></strong>, <strong>N° Motor</strong>:
            <strong><u>{{ $documento->vehiculo->num_motor }}</u></strong>, <strong>N° Chasis:</strong> <strong><u>{{ $documento->vehiculo->chasis }}</u></strong>,
            <strong>Año:</strong> <strong><u>{{ $documento->vehiculo->anio }}</u></strong> , <strong>Placa patente:</strong>
            <strong><u>{{ $documento->vehiculo->inscripcion }}</u></strong>
        </p>
        <p>
            La Mandataria, en el uso de este poder o mandato, estará facultada para suscribir el contrato de
            compraventa,
            promesa de venta y/o
            suscribir todos los documentos que sea preciso para llevar adelante la venta y la transferencia del
            Vehículo.
            Adicionalmente podrá fijar
            cláusulas, precios y condiciones de pago, pudiendo incluso resciliar y suscribir nuevos contratos, sin
            límite de
            facultades que impidan el
            eficaz cumplimiento de su encargo.
        </p>
        <p>
            En caso de ser necesario, se faculta a la Mandataria y/o a AB AUTOMOVILES, Rol Único Tributario
            77.166.979-4,
            para que realice complete
            y/o corrija los campos de los contratos de compraventa suscritos por el Mandante, con motivo de errores que
            pudiesen afectar la
            transferencia del Vehículo o las operaciones asociadas a la misma. Adicionalmente, queda facultado para
            disponer
            y suscribir los
            documentos y procesos que sean necesarios para garantizar el uso del vehículo por parte de los compradores,
            tales como poder de viaje al
            extranjero, tag y otros que permitan su eficaz uso.
        </p>
        <p>
            <strong><u>SEGUNDO:</u></strong> <strong>Representación ante Tesorería General de la República</strong>.
            Adicionalmente, se confiere poder a la
            Mandataria y/o al Notario
            autorizante de este instrumento, para que cualquier de ellos, indistintamente, sus representantes o quienes
            ellos designen, representen al
            Mandante ante Tesorería General de la República en todas las gestiones que sean necesarias para la solicitud
            de
            devolución, corrección y
            otros trámites que tengan relación con el Giro y Pago de derechos de transferencia de vehículos con permiso
            de
            circulación de acuerdo al
            formulario 23 y en el folio que se origine con motivo de la transferencia del Vehículo.
        </p>
        <p>
            <strong><u>TERCERO:</u></strong> <strong>Obligación de no hacer.</strong> El Mandante se obliga, a partir de
            esta fecha y por el presente instrumento, a
            no enajenar, gravar, ni
            celebrar acto o contrato alguno relacionado con el (los) vehículo(s) respecto de los cuales encarga su
            venta.
        </p>
        <p>
            <strong>CUARTO:</strong> <strong>Cesión del mandato.</strong> El Mandante faculta expresamente a la
            Mandataria a ceder en forma total o parcial el
            presente mandato.
        </p>
        <p>
            <strong><u>QUINTO:</u></strong> El presente mandato es irrevocable y se mantendrá vigente a partir de la
            fecha del presente instrumento
            y regirá hasta la fiel
            ejecución del encargo. Por tanto, es de duración indefinida y en ningún caso de duración menor a tres años.
        </p>
        <p>
            <strong><u>SEXTO:</u></strong> Se deja expresa constancia de que el presente mandato es gratuito, razón por
            la que la Mandataria no
            recibirá ninguna prestación,
            pecuniaria ni de cualquier tipo, por el ejercicio del mismo. La Mandataria no podrá hacer uso del Vehículo
            en
            ningún modo, más que lo
            estrictamente necesario para poder llevar a cabo el objeto del presente mandato. Tampoco podrá percibir el
            precio de la venta del Vehículo.
            Atendido lo anterior, en caso de que el Mandante deba incurrir en gastos para la transacción del Vehículo,
            serán
            de su propia
            responsabilidad, y no de la Mandataria. En el mismo sentido, la Mandataria no será responsable de ningún
            incumplimiento en que incurra el
            Mandante, ni tampoco de ningún incumplimiento en que incurra el futuro comprador del Vehículo.
        </p>
        <p>
            <strong><u>SÉPTIMO:</u></strong> Para los efectos de este contrato, las partes fijan su domicilio en la
            ciudad de Santiago, prorrogando
            la competencia para ante
            sus tribunales.

        </p>
        <p>
            <strong><u>OCTAVO:</u></strong> El comprador declara expresa y juradamente, en forma individual, que ha
            firmado el presente instrumento,
            encontrándose
            físicamente dentro de los límites territoriales y geográficos de la comuna de <strong><u>{{ $documento->firma->comuna }}</u></strong>
            Región <strong><u>{{ $documento->firma->region }}</u></strong> lo
            cual le consta
            fehacientemente por conocer los límites de la comuna referida.
        </p>
        <p>
            Esta declaración se realiza con el objeto de cumplir con lo dispuesto por el inciso final del artículo 400
            del
            Código Orgánico de Tribunales al
            momento de la autorización de la firma del presente contrato.
        </p>
        <p>
            Se deja expresa constancia de que esta declaración ha sido efectuada por el comprador con el pleno
            conocimiento
            respecto de la
            disposición contenida en el artículo 210 del Código Penal de la República de Chile, que especifica la
            responsabilidad por perjurar o dar falso
            testimonio, asumiendo la responsabilidad legal correspondiente.
        </p>
    </div>
    <!--Pagina firma-->
    <div style="position: relative;padding-top: 50px;font-size: 0.8em;">
        <div style="margin-top: 50px;width:300px;height: 70px;padding: 3px 10px;
        border: #1d536a 1px dashed;position: absolute;right: 0;">
            <div style="position: relative;top: 25%;text-align: center !important;color: #1d536a;">
                <label style="width: 100%;text-align: center;">{{ $documento->comprador->nombre }}</label>
                <label style="width: 100%;text-align: center;">F9594AAA-88B9-49B1-A3D3-4F65F92821E8</label>
            </div>
            <img style="position: absolute;left: -10px;top: -10px;" src="{{ public_path('img/lock.png') }}"/>
        </div>
        <div style="margin-top: 100px;padding: 3px 10px;width: 300px;
        border-bottom: black 1px solid;position: absolute;right: 0;">
        <div style="position: relative;top: 5%;text-align: center !important;">
            <label style="width: 100%;text-align: center;">Firma del comprador</label>
            <label style="width: 100%;text-align: center;">RUT: {{ $documento->comprador->run }}</label>
        </div>
        </div>
    </div>

</body>

</html>
