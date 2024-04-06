import Dropzone from "dropzone";

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



})




dropzone.on('removedfile', function () {
    document.querySelector('[name="imagen"]').value = ""



})



