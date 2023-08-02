function InicioSecion (){
    let documento = $('#documento').val();
    let password = $('#password').val();

    console.log(documento + password);

 if (documento == null || documento == undefined || documento ==''){
    alert('Ingrese Documento');
 }
 if (password == null || password == undefined || password == ''){
    alert('Ingrese Contraseña');
    }
    $.ajax({
        url: `../app/inicio_sesion.php?documento=${documento}&password=${password}`,
        
        dataType: 'text',
        success: function (json) {
            
            // $('#titulo').text('Correo ya registrado');              
            location.href = '../vistas2/index_.html';
        },
        error: function (xhr, status) {
            // console.log('Disculpe, existió un problema');
            // $('#titulo').html('Correo Registrado Correctamente');
            // location.href = '../vistas/index.html';
     
     
        },
        // código a ejecutar sin importar si la petición falló o no
        complete: function (xhr, status) {
            console.log('Consulta echa');
           }
     });
}


