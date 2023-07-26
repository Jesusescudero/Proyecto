
function Validar() {

    var form = document.getElementById("Registro").addEventListener("submit", function(evento){
        
        var contra = document.getElementById("pass1").value;
        var contra2 = document.getElementById("pass2").value;
        var usuario = document.getElementById("usu").value;
        
        if (contra == contra2) {
            alert("Bienvenido "+ usuario + " a Encanto Artesanal");
        }
        else{
            alert("Las contraseñas no coinciden");
            evento.preventDefault();
        }
    });
}