<?php

namespace App\Http\Controllers;

use App\Models\Comprador;
use App\Models\Documento;
use App\Models\Firma;
use App\Models\PropietarioVehiculo;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use PDF;

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
        //$documento = Documento::with('vehiculo','propietario_vehiculo', 'firma', 'comprador')->get();
        $documentos = Documento::with('vehiculo')->get();
        return view('documento.index', compact('documentos'));
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
        //Guardar propietario vehiculo
        $propietario_vehiculo = PropietarioVehiculo::create([
            'run' => $request->run,
            'nombre' => $request->nombre,
            'fecha_adquision' => $request->fecha_adquision,
            //'repertorio' => $request->numero,
            'de_fecha' => $request->de_fecha,
            'comuna' => $request->comuna,
            'direccion' => $request->direccion,
            'celular' => $request->celular,
            'email' => $request->email
        ]);
        //Guardar firma

        $lugar_firma = Firma::create([
            'region' => $request->region_firma,
            'comuna' => $request->comuna_firma
        ]);

        $vehiculo = Vehiculo::create([
            'inscripcion' => $request->inscripcion,
            'tipo_vehiculo' => $request->tipo_vehiculo,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'anio' => $request->anio,
            'num_motor' => $request->num_motor,
            'chasis' => $request->num_chasis,
            'num_vin' => $request->num_vin,
            'color' => $request->color,
            'combustible' => $request->combustible,
            'pbv' => $request->pbv,
            'instituto' => $request->instituto,
            'num_poliza' => $request->num_poliza,
            'fecha_vencimiento_politica' => $request->fecha_vencimiento_politica,
            'limitaciones_dominio' => $request->limitacion_dominio,
            'subincripciones' => $request->subinscripciones,
        ]);

           $comprador = Comprador::create([
            'run' => $request->run_comprador,
            'nombre' => $request->nombre_comprador,
            'region' => $request->region_comprador,
            'comuna' => $request->comuna_comprado,
            'ciudad' => $request->ciudad_comprador,
            'direccion' => $request->direccion_comprado,
            'email' => $request->email_comprado,
            'celular' => $request->celular_comprador,
        ]);

        $documento = Documento::create([
            'fecha_creacion' => date('Y-m-d'),
            'sucuarsal' => 0,
            'usuario' => 0,
            'num_inscripcion' => $request->inscripcion,
            'rut_comprador' => $request->run_comprador,
            'nombre_vendedor' => 'nombre vendedor',
            'propietario_vehiculo_id' => $propietario_vehiculo->id,
            'vehiculo_id' => $vehiculo->id,
            'firma_id' => $lugar_firma->id,
            'comprador_id' => $comprador->id,
        ]);

        $documento->num_interno = $this->generarCodigo($documento->id);
        $documento->save();
        return response()->json($documento, 200);
    }

    public function generarCodigo($id)
    {
        return 'DOC'.str_pad($id, 7, "0", STR_PAD_LEFT);
    }

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
    public function edit($id)
    {
        $documento = Documento::with('vehiculo','propietario_vehiculo', 'firma', 'comprador')->where('id', $id)->first();
        return view('documento.edit', compact('documento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $documento_id)
    {
        $propiertario_vehiculo = PropietarioVehiculo::find($request->propietario_vehiculo_id);
        $propiertario_vehiculo->update([
            'run'=>$request->run_propietario,
            'nombre'=>$request->nombre_propietario,
            'fecha_adquision'=>$request->fecha_adquision_propietario,
            'repertorio'=>$request->repertorio_propietario,
            'de_fecha'=>$request->de_fecha_propietario,
            'comuna'=>$request->comuna_propietario,
            'direccion'=>$request->direccion_propietario,
            'celular'=>$request->celular_propietario,
            'email'=>$request->email_propietario,
        ]);
        $vehiculo = Vehiculo::find($request->vehiculo_id);
        $vehiculo->update([
            'inscripcion'=>$request->inscripcion,
            'anio'=>$request->anio,
            'tipo_vehiculo'=>$request->tipo_vehiculo,
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'num_motor'=>$request->num_motor,
            'chasis'=>$request->chasis,
            'num_vin'=>$request->num_vin,
            'color'=>$request->color,
            'combustible'=>$request->combustible,
            'pbv'=>$request->pbv,
            'instituto'=>$request->instituto,
            'num_poliza'=>$request->num_poliza,
            'fecha_vencimiento_politica'=>$request->fecha_vencimiento_politica,
            'limitaciones_dominio'=>$request->limitaciones_dominio,
            'subincripciones'=>$request->subincripciones,
        ]);
        $firma = Firma::find($request->firma_id);
        $firma->update([
            'region'=>$request->region_firma,
            'comuna'=>$request->comuna_firma,
        ]);
        $comprador = Comprador::find($request->comprador_id);
        $comprador->update([
            'run'=>$request->run_comprador,
            'nombre'=>$request->nombre_comprador,
            'region'=>$request->region_comprador,
            'comuna'=>$request->comuna_comprador,
            'ciudad'=>$request->ciudad_comprador,
            'direccion'=>$request->direccion_comprador,
            'email'=>$request->email_comprador,
            'celular'=>$request->celular_comprador,
        ]);
        $documento = Documento::find($documento_id);
        $documento->update([
            'fecha_creacion'=>$request->fecha_creacion,
            'num_interno'=>$request->num_interno,
            'num_inscripcion'=>$request->num_inscripcion,
            'rut_comprador'=>$request->rut_comprador,
            'estado'=>$request->estado,
        ]);

        return redirect()->route('documento.edit', $documento_id)
            ->with('success', 'Se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documento = Documento::find($id);
        $codigo_interno = $documento->num_interno;
        $documento->delete();
        return redirect()->route('documento.index')
            ->with('success', 'Se elimino correctamente el documento : '.$codigo_interno);
    }
    public function leerPdf(Request $request)
    {
        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $request->file('documento')->getPathName();
        $parserPdf = $parser->parseFile($pdf);
        $obtenerText = $parserPdf->getText();

        $salida = array(
            "datos_propietario" => array(
                "run" => $this->buscarDatos('R.U.N.', ['Fec. adquisición'], 1, $obtenerText),
                "nombre" => $this->buscarDatos('Nombre', ['R.U.N.'], 1, $obtenerText),
                "fecha_adquision" => $this->buscarDatos('Fec. adquisición', ['Repertorio'], 1, $obtenerText),
                "repertorio" => $this->buscarDatos('Repertorio', ['Número'], 1, $obtenerText),
                "numero" => $this->buscarDatos('Número', ['de fecha'], 1, $obtenerText),
                "de_fecha" => substr($this->buscarDatos('de fecha', [''], 2, $obtenerText), 0,10),
            ),
            "datos_vehiculo" => array(
                "inscripcion" => $this->buscarDatos('Inscripción', ['DATOS DEL VEHICULO'], 1, $obtenerText),
                "tipo_vehiculo" => $this->buscarDatos('Tipo Vehículo', ['Año'], 1, $obtenerText),
                "anio" => $this->buscarDatos('Año', ['Marca'], 1, $obtenerText),
                "marca" => $this->buscarDatos('Marca', ['Modelo'], 1, $obtenerText),
                "modelo" => $this->buscarDatos('Modelo', ['Nro. Motor'], 1, $obtenerText),
                "nro_motor" => $this->buscarDatos('Nro. Motor', ['Nro. Chasis'], 1, $obtenerText),
                "nro_chasis" => $this->buscarDatos('Nro. Chasis', ['Nro. Vin', 'Color'], 1, $obtenerText),
                "nro_vin" => $this->buscarDatos('Nro. Vin', ['Color'], 1, $obtenerText),
                "color" => $this->buscarDatos('Color', ['Combustible'], 1, $obtenerText),
                "combustible" => $this->buscarDatos('Combustible', ['PBV'], 1, $obtenerText),
                "pbv" => $this->buscarDatos('PBV', ['KILOS'], 1, $obtenerText) ." KILOS",
                "insti_asegurardor" => $this->buscarDatos('Instit. aseg.', ['Numero poliza'], 1, $obtenerText),
                "num_poliza" => $this->buscarDatos('Numero poliza', ['Fec. ven. pol.'], 1, $obtenerText),
                "fecha_vencimiento_politica" => $this->buscarDatos('Fec. ven. pol.', ['DATOS DEL PROPIETARIO'], 1, $obtenerText),
            ),
            "limitacion_vehiculo" => array(
                "limitacion_dominio" => $this->buscarDatos('LIMITACIONES AL DOMINIO', ['Sr. usuario'], 1, $obtenerText),
            ),
            "subinscripciones" => array(
                "subinscripciones" => $this->buscarDatos('SUBINSCRIPCIONES', ['Sr. usuario'], 1, $obtenerText),
            ),
        );

        return response()->json($salida, 200);
    }
    function buscarDatos($desde, $hasta, $tipo, $texto)
    {
        $valor_hast_for = 0;
        $texto = stristr($texto, $desde);//texto

            for ($i=0; $i < count($hasta); $i++) {
                $obtener_posicion_hasta = strpos($texto, $hasta[$i]);
                if($obtener_posicion_hasta != ''){
                   $valor_hast_for = $obtener_posicion_hasta;
                    break;
                }
            }

        if ($tipo == 1) {
            $cantidad_de_caracteres_desde = strlen($desde);
            $obtener_posicion_desde = strpos($texto, $desde);

            if ($obtener_posicion_desde != '') {
                $desde_posicion_valor_real = $obtener_posicion_desde + $cantidad_de_caracteres_desde;
                $hasta_posicion_valor_final = $valor_hast_for - $obtener_posicion_desde;
                $hasta_posicion_valor_final = $hasta_posicion_valor_final - $cantidad_de_caracteres_desde;
                //Salida de resultado limpio
                return trim(preg_replace('/[\@\;\:]+/', '', substr($texto, $desde_posicion_valor_real, $hasta_posicion_valor_final)));
            } else {
                return '';
            }
        } else {

            if ($valor_hast_for == '') {
                $cantidad_de_caracteres_desde = strlen($desde);
                $obtener_posicion_desde = strpos($texto, $desde);
                $desde_posicion_valor_real = $obtener_posicion_desde + $cantidad_de_caracteres_desde;
                return trim(preg_replace('/[\@\;\:]+/', '', substr($texto, $desde_posicion_valor_real, $tipo)));
            } else {
                $cantidad_de_caracteres_desde = strlen($desde);
                $obtener_posicion_desde = strpos($texto, $desde);
                $valor_hast_for = strpos($texto, $valor_hast_for);
                $desde_posicion_valor_real = $obtener_posicion_desde + $cantidad_de_caracteres_desde;
                $hasta_posicion_valor_final = $valor_hast_for - $obtener_posicion_desde;

                return trim(preg_replace('/[\@\;\:]+/', '', substr($texto, $desde_posicion_valor_real, ($hasta_posicion_valor_final + $tipo))));
            }
        }
    }
    public function imprimirContrato($id)
    {
        $documento = Documento::with('vehiculo','propietario_vehiculo', 'firma', 'comprador')->where('id', $id)->first();
		$pdf = PDF::loadView('documento.imprimir_pdf', compact('documento'));
        $pdf->setPaper('A4', 'portrait');
		return $pdf->stream('documento.pdf');
    }
    public function actaFormatoCompleto($id)
    {
        $documento = Documento::with('vehiculo','propietario_vehiculo', 'firma', 'comprador')->where('id', $id)->first();
		$pdf = PDF::loadView('documento.actaFormatoCompleto', compact('documento'));
        $pdf->setPaper('A4', 'portrait');
		return $pdf->stream('documento.pdf');
    }
    public function actaConRepresentacion($id)
    {
        $documento = Documento::with('vehiculo','propietario_vehiculo', 'firma', 'comprador')->where('id', $id)->first();
		$pdf = PDF::loadView('documento.actaConRepresentacion', compact('documento'));
        $pdf->setPaper('A4', 'portrait');
		return $pdf->stream('documento.pdf');
    }
    public function contratoCompraPara($id)
    {
        $documento = Documento::with('vehiculo','propietario_vehiculo', 'firma', 'comprador')->where('id', $id)->first();
		$pdf = PDF::loadView('documento.contratoCompraPara', compact('documento'));
        $pdf->setPaper('A4', 'portrait');
		return $pdf->stream('documento.pdf');
    }
    public function contratoDeCompraVenta($id)
    {
        $documento = Documento::with('vehiculo','propietario_vehiculo', 'firma', 'comprador')->where('id', $id)->first();
		$pdf = PDF::loadView('documento.contratoDeCompraVenta', compact('documento'));
        $pdf->setPaper('A4', 'portrait');
		return $pdf->stream('documento.pdf');
    }
    public function contratoPresentacionVendedorComprador($id)
    {
        $documento = Documento::with('vehiculo','propietario_vehiculo', 'firma', 'comprador')->where('id', $id)->first();
		$pdf = PDF::loadView('documento.contratoPresentacionVendedorComprador', compact('documento'));
        $pdf->setPaper('A4', 'portrait');
		return $pdf->stream('documento.pdf');
    }
    public function contratoRepresentacionVendedor($id)
    {
        $documento = Documento::with('vehiculo','propietario_vehiculo', 'firma', 'comprador')->where('id', $id)->first();
		$pdf = PDF::loadView('documento.contratoRepresentacionVendedor', compact('documento'));
        $pdf->setPaper('A4', 'portrait');
		return $pdf->stream('documento.pdf');
    }
}
