let documento_pdf = document.getElementById('documento_pdf');
//Instanciar elementos
let run = document.getElementById('run');
let nombre = document.getElementById('nombre');
let fecha_adquision = document.getElementById('fecha_adquision');
let repertorio = document.getElementById('repertorio');
let numero = document.getElementById('numero');
let de_fecha = document.getElementById('de_fecha');

let comuna = document.getElementById('comuna');
let direccion = document.getElementById('direccion');
let celular = document.getElementById('celular');
let email = document.getElementById('email');
//Lugar firma
let region_firma = document.getElementById('region_firma');
let comuna_firma = document.getElementById('comuna_firma');
//
//Vehiculo
let inscripcion = document.getElementById('inscripcion');
let tipo_vehiculo = document.getElementById('tipo_vehiculo');
let marca = document.getElementById('marca');
let anio_vehiculo = document.getElementById('anio_vehiculo');
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
//Comprador datos
let run_comprador = document.getElementById('run_comprador');
let nombre_comprador = document.getElementById('nombre_comprador');
let region_comprador = document.getElementById('region_comprador');
let comuna_comprado = document.getElementById('comuna_comprado');
let ciudad_comprador = document.getElementById('ciudad_comprador');
let direccion_comprado = document.getElementById('direccion_comprado');
let email_comprado = document.getElementById('email_comprado');
let celular_comprador = document.getElementById('celular_comprador');
//
//Fin instanciar elementos
documento_pdf.onchange = function () {
    let obtenerDocumento = documento_pdf
    let documento = obtenerDocumento.files[0];
    console.log(documento);

    const formData = new FormData();
    formData.append('documento', documento);

    fetch('http://127.0.0.1:8000/leerpdf', {
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        method: 'POST',
        body: formData
    })
        .then(response => {
            if (!response.ok) {
                console.log('Holaaaa' + response);
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
            fecha_adquision_formateada = result.datos_propietario.fecha_adquision.split('-').reverse().join('-')
            fecha_adquision.value = fecha_adquision_formateada
            repertorio.value = result.datos_propietario.repertorio
            numero.value = result.datos_propietario.numero
            fecha = result.datos_propietario.de_fecha.split('-').reverse().join('-')
            de_fecha.value = fecha
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
            anio_vehiculo.value = result.datos_vehiculo.anio
            //
            fecha_vencimiento_politica_formateada = result.datos_vehiculo.fecha_vencimiento_politica.split('-').reverse().join('-')
            fecha_vencimiento_politica.value = fecha_vencimiento_politica_formateada
            //Limitacion del vehiculo
            limitacion_dominio.innerHTML = result.limitacion_vehiculo.limitacion_dominio
            //subinscripciones
            subinscripciones.innerHTML = result.subinscripciones.subinscripciones
        })
        .catch(function (error) {
            console.log(JSON.stringify(error));
        });

};

function guardarDocumento() {
    const formData = new FormData();
    formData.append('run', run.value);
    formData.append('nombre', nombre.value);
    formData.append('fecha_adquision', fecha_adquision.value);
    formData.append('repertorio', repertorio.value);
    formData.append('numero', numero.value);
    formData.append('de_fecha', de_fecha.value);
    formData.append('comuna', comuna.value);
    formData.append('direccion', direccion.value);
    formData.append('celular', celular.value);
    formData.append('email', email.value);
    //Lugar firma
    formData.append('region_firma', region_firma.value);
    formData.append('comuna_firma', comuna_firma.value);
    //Datos de vehiculo
    formData.append('inscripcion', inscripcion.value);
    formData.append('tipo_vehiculo', tipo_vehiculo.value);
    formData.append('marca', marca.value);
    formData.append('anio', anio_vehiculo.value);
    formData.append('modelo', modelo.value);
    formData.append('num_motor', num_motor.value);
    formData.append('num_chasis', num_chasis.value);
    formData.append('num_vin', num_vin.value);
    formData.append('color', color.value);
    formData.append('combustible', combustible.value);
    formData.append('pbv', pbv.value);
    formData.append('instituto', instituto.value);
    formData.append('num_poliza', num_poliza.value);
    formData.append('fecha_vencimiento_politica', fecha_vencimiento_politica.value);
    formData.append('limitacion_dominio', limitacion_dominio.innerHTML);
    formData.append('subinscripciones', subinscripciones.innerHTML);
    //Datos comprador
    formData.append('run_comprador', run_comprador.value);
    formData.append('nombre_comprador', nombre_comprador.value);
    formData.append('region_comprador', region_comprador.value);
    formData.append('comuna_comprado', comuna_comprado.value);
    formData.append('ciudad_comprador', ciudad_comprador.value);
    formData.append('direccion_comprado', direccion_comprado.value);
    formData.append('email_comprado', email_comprado.value);
    formData.append('celular_comprador', celular_comprador.value);

    fetch('http://127.0.0.1:8000/documento', {
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
            console.log(result)
            let url = location.href
            Swal.fire({
                icon: 'success',
                title: 'Los datos se guardaron satisfactoriamente',
                text: 'Click para imprimir el contrado!',
                footer: `<a target="_blank" href="${url}contrato/${result.id}">Imprimir</a>`
            })
        })
        .catch(function (error) {
            console.log(Object.values(error));
        });


    //validar formulario
    console.log(formData)
}

function eliminarDocumento(elemento) {
    event.preventDefault();
    let form = elemento.parentNode
    console.log(form)
    Swal.fire({
        title: '¿Estas seguro?',
        text: "No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, bórralo!'
      }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
      })
}




