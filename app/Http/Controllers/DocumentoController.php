<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

//$parse = new Smalot\PdfParser\Parser;


class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documento $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documento $documento)
    {
        //
    }
    public function leerPdf(Request $request)
    {
        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $request->file('documento')->getPathName();
        $parserPdf = $parser->parseFile($pdf);
        $obtenerText = $parserPdf->getText();

        $salida = array(
            "datos_propietario" => array(
                "run" => $this->buscarDatos('R.U.N.', 'Fec. adquisición', 1, $obtenerText),
                "nombre" => $this->buscarDatos('Nombre', 'R.U.N.', 1, $obtenerText),
                "fecha_adquision" => $this->buscarDatos('Fec. adquisición', 'Repertorio', 1, $obtenerText),
                "repertorio" => $this->buscarDatos('Repertorio', 'Número', 1, $obtenerText),
                "numero" => $this->buscarDatos('Número', 'de fecha', 1, $obtenerText),
                "de_fecha" => $this->buscarDatos('de fecha', '', 13, $obtenerText),
            ),
            "datos_vehiculo" => array(
                "inscripcion" => $this->buscarDatos('Inscripción', 'DATOS DEL VEHICULO', 1, $obtenerText),
                "tipo_vehiculo" => $this->buscarDatos('Tipo Vehículo', 'Año', 1, $obtenerText),
                "marca" => $this->buscarDatos('Marca', 'Modelo', 1, $obtenerText),
                "modelo" => $this->buscarDatos('Modelo', 'Nro. Motor', 1, $obtenerText),
                "nro_motor" => $this->buscarDatos('Nro. Motor', 'Nro. Chasis', 1, $obtenerText),
                "nro_chasis" => $this->buscarDatos('Nro. Chasis', 'Nro. Vin', 1, $obtenerText),
                "nro_vin" => $this->buscarDatos('Nro. Vin', 'Color', 1, $obtenerText),
                "color" => $this->buscarDatos('Color', 'Combustible', 1, $obtenerText),
                "combustible" => $this->buscarDatos('Combustible', 'PBV', 1, $obtenerText),
                "pbv" => $this->buscarDatos('PBV', 'Instit. aseg.', 1, $obtenerText),
                "insti_asegurardor" => $this->buscarDatos('Instit. aseg.', 'Numero poliza', 1, $obtenerText),
                "num_poliza" => $this->buscarDatos('Numero poliza', 'Fec. ven. pol.', 1, $obtenerText),
                "fecha_vencimiento_politica" => $this->buscarDatos('Fec. ven. pol.', 'DATOS DEL PROPIETARIO', 1, $obtenerText),
            ),
            "limitacion_vehiculo" => array(
                "limitacion_dominio" => $this->buscarDatos('LIMITACIONES AL DOMINIO', 'SUBINSCRIPCIONES', 1, $obtenerText),
            ),
            "subinscripciones" => array(
                "subinscripciones" => $this->buscarDatos('SUBINSCRIPCIONES', 'FECHA SUBINSCRIPCION', 19, $obtenerText),
            ),
        );

        return response()->json($salida, 200);
    }
    public function buscarDatos($desde, $hasta, $tipo, $texto)
    {
        if ($tipo == 1) {
            $cantidad_de_caracteres_desde = strlen($desde);
            $obtener_posicion_desde = strpos($texto, $desde);
            $obtener_posicion_hasta = strpos($texto, $hasta);
            $desde_posicion_valor_real = $obtener_posicion_desde + $cantidad_de_caracteres_desde;
            $hasta_posicion_valor_final = $obtener_posicion_hasta - $obtener_posicion_desde;
            $hasta_posicion_valor_final = $hasta_posicion_valor_final - $cantidad_de_caracteres_desde;
            //Salida de resultado limpio
            return trim(preg_replace('/[\@\;\:]+/', '', substr($texto, $desde_posicion_valor_real, $hasta_posicion_valor_final)));
        } else {

            if ($hasta == '') {
                $cantidad_de_caracteres_desde = strlen($desde);
                $obtener_posicion_desde = strpos($texto, $desde);
                $desde_posicion_valor_real = $obtener_posicion_desde + $cantidad_de_caracteres_desde;
                return trim(preg_replace('/[\@\;\:]+/', '', substr($texto, $desde_posicion_valor_real, $tipo)));
            } else {
                $cantidad_de_caracteres_desde = strlen($desde);
                $obtener_posicion_desde = strpos($texto, $desde);
                $obtener_posicion_hasta = strpos($texto, $hasta);
                $desde_posicion_valor_real = $obtener_posicion_desde + $cantidad_de_caracteres_desde;
                $hasta_posicion_valor_final = $obtener_posicion_hasta - $obtener_posicion_desde;

                return trim(preg_replace('/[\@\;\:]+/', '', substr($texto, $desde_posicion_valor_real, ($hasta_posicion_valor_final + $tipo))));
            }
        }
    }
}
