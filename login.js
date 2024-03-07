$(document).ready(function(){

    var com_id = getUrlParameter('c');

    $('#emp_id').select2();

    $('#suc_id').select2();

    $.post("controller/empresa.php?op=combo",{com_id:com_id},function(data){
        $("#emp_id").html(data);
    });

    $('#emp_id').change(function(){
        $('#emp_id').each(function(){
            emp_id = $(this).val();

            $.post("controller/sucursal.php?op=combo",{emp_id:emp_id},function(data){
                $("#suc_id").html(data);
            });
        });
    });
});

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

/* EXTRA */
function validarFormulario() {
    var emp_id = document.getElementById("emp_id").value;
    var suc_id = document.getElementById("suc_id").value;
    var usu_correo = document.getElementById("usu_correo").value;
    var usu_pass = document.getElementById("usu_pass").value;

    if (emp_id == "" || suc_id == "" || usu_correo == "" || usu_pass == "") {

        // Cambiar el color y texto del placeholder

        document.getElementById("usu_correo").style.color = "black";
        document.getElementById("usu_correo").setAttribute("placeholder", "Complete este campo");

        document.getElementById("usu_pass").style.color = "black";
        document.getElementById("usu_pass").setAttribute("placeholder", "Complete este campo");

        return false;
    } else {
        document.getElementById("usu_correo").style.color = "";
        document.getElementById("usu_pass").style.color = "";
    }

    return true;
};

/* MOSTRAR Y OCULTAR CONTRASEÑA */
document.addEventListener('DOMContentLoaded', function() {
    var passwordInput = document.getElementById('usu_pass');
    var toggleButton = document.getElementById('password-addon');

    toggleButton.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
});
