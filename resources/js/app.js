import Dropzone from "dropzone";

Dropzone.autoDiscover = false;


const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage:'Sube tu imagen aqui ',

    acceptedFiles:".svg, .jpe,.png, .gif, .jpg",
    addRemoveLinks:true,
    dictRemoveFile:"Borrar Archivo",
     maxFiles:10,
     uploadMultiple:false
})

dropzone.on('sending',function (file,xhr,formData){
    console.log(formData);

})


dropzone.on('success',function (file,response){
    console.log(response);

})

dropzone.on('error',function (file,message){
    console.log();

})


dropzone.on('removedfile',function (){
    console.log("elimnado");

})



