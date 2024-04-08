import Dropzone from "dropzone";

import  Toastify from 'toastify-js'

Dropzone.autoDiscover = false;


const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube tu imagen aqui ',

    acceptedFiles: ".svg, .jpe,.png, .gif, .jpg",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar Archivo",
    maxFiles: 10,
    uploadMultiple: false,
    init: function () {

        if (document.querySelector('[name="imagen"]').value.trim()) {

            const imagen_publicada = {}
            imagen_publicada.size = 12345;
            imagen_publicada.name = document.querySelector('[name="imagen"]').value;

            this.options.addedfile.call(this, imagen_publicada)
            this.options.thumbnail.call(this, imagen_publicada, `/uploads/${imagen_publicada.name}`)

            imagen_publicada.previewElement.classList.add('dz-success', 'dz-complete')


        }

    }
})




dropzone.on('success', function (file, response) {


    document.querySelector('[name="imagen"]').value = response.imagen;

    Toastify({

        text: "Imagen Subida Con exito",

        duration: 3000,
        gravity:"top",

        style:{
            background: "linear-gradient(to right, #00b09b, #96c93d)",
        }



        }).showToast();




})




dropzone.on('removedfile', function () {
    document.querySelector('[name="imagen"]').value = ""
    Toastify({

        text: "Eliminado Con exito",

        duration: 1000,
        gravity:"top",

        style:{
            background: "rgb(206,23,26)",
            background: "linear-gradient(90deg, rgba(206,23,26,1) 91%, rgba(226,25,25,1) 100%)"
        }



        }).showToast();




})



