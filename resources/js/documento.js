let documento_pdf = document.getElementById('documento_pdf');
//Instanciar elementos
let run = document.getElementById('run');
let nombre = document.getElementById('nombre');
let fecha_adquision = document.getElementById('fecha_adquision');
let repertorio = document.getElementById('repertorio');
let numero = document.getElementById('numero');
let de_fecha = document.getElementById('de_fecha');
//Vehiculo
let inscripcion = document.getElementById('inscripcion');
let tipo_vehiculo = document.getElementById('tipo_vehiculo');
let marca = document.getElementById('marca');
let modelo = document.getElementById('modelo');
let num_motor = document.getElementById('num_motor');
let num_chasis = document.getElementById('num_chasis');
let num_vin = document.getElementById('num_vin');
let color = document.getElementById('color');
let combustible = document.getElementById('combustible');
let pbv = document.getElementById('pbv');
let instituto = document.getElementById('instituto');
let num_poliza = document.getElementById('num_poliza');
let fecha_vencimiento_politica = document.getElementById('fecha_vencimiento_politica');
//Limitacion del vehiculo
let limitacion_dominio = document.getElementById('limitacion_dominio');
//SUBINSCRIPCIONES
let subinscripciones = document.getElementById('subinscripciones');
//Fin instanciar elementos
documento_pdf.onchange = function () {
    let obtenerDocumento = documento_pdf
    let documento = obtenerDocumento.files[0];
    console.log(documento);

    const formData = new FormData();
    formData.append('documento', documento);
    console.log(formData)
    fetch('http://127.0.0.1:8000/leerpdf', {
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        method: 'POST',
        body: formData
    })
        .then(response => {
            if (!response.ok) {
                throw new Error(
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        footer: '<a href="">Why do I have this issue?</a>'
                    })
                );

            }
            else {
                return response.json()
            }
        })
        .then(function (result) {
            //let nombre = result['nombre'];
            //let imprimir = result.datos_propietario.nombre;
            console.log(result)
            Swal.fire(
                'El PDF se ejecuto correctamente!',
                `Los datos se cargaran a el formulario`,
                'success'
            )
            //Agregar valores a propietario
            run.value = result.datos_propietario.run
            nombre.value = result.datos_propietario.nombre
            fecha_adquision.value = result.datos_propietario.fecha_adquision
            repertorio.value = result.datos_propietario.repertorio
            numero.value = result.datos_propietario.numero
            de_fecha.value = result.datos_propietario.de_fecha
            //Agregar valaores a vehiculo
            inscripcion.value = result.datos_vehiculo.inscripcion
            tipo_vehiculo.value = result.datos_vehiculo.tipo_vehiculo
            marca.value = result.datos_vehiculo.marca
            modelo.value = result.datos_vehiculo.modelo
            num_motor.value = result.datos_vehiculo.nro_motor
            num_chasis.value = result.datos_vehiculo.nro_chasis
            num_vin.value = result.datos_vehiculo.nro_vin
            color.value = result.datos_vehiculo.color
            combustible.value = result.datos_vehiculo.combustible
            pbv.value = result.datos_vehiculo.pbv
            instituto.value = result.datos_vehiculo.insti_asegurardor
            num_poliza.value = result.datos_vehiculo.num_poliza
            fecha_vencimiento_politica.value = result.datos_vehiculo.fecha_vencimiento_politica
            //Limitacion del vehiculo
            limitacion_dominio.innerHTML =  result.limitacion_vehiculo.limitacion_dominio
            //subinscripciones
            subinscripciones.innerHTML = result.subinscripciones.subinscripciones
        })
        .catch(function (error) {
            console.log(JSON.stringify(error));
        });

};

function guardarDocumento()
{
    //validar formulario
    console.log('Enviandooo')
}


