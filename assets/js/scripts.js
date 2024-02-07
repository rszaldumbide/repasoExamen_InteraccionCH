/* funcion para pasar datos al modal */
function pasarDatos(datos, id) {
    document.getElementById('provNombre').value = datos;
    document.getElementById('idProducto').value = id;
}

/* forma del input de la cedula  */
{/* <div class="input-group mb-3">
    <span class="input-group-text bg-dark text-light" id="basic-addon1">Cédula: </span>
    <input class="form-control" maxlength="10" onkeyup="verificar()" onkeypress="return ingresoNumeros(event);" type="text" id="cedula" name="cedula" placeholder="Cedula">
</div> */}

/* funcion para validar que solo ingrese numeros */
function validador(evt) {
    let cod = evt.which ? evt.which : evt.keyCode;

    if (cod >= 48 && cod <= 57) {
        return true;
    } else {
        return false;
    }
}
/* funcion para llamar a cedula ecuatoriana */
function verificar() {
    if (document.getElementById("cedula").value.length == 10) {
        separarJS();
    }
}
/* logica de cedula */
function separarJS() {
    let cedula = document.getElementById("cedula").value;
    let caracteres = cedula.split("");
    let mul = 0;
    let suma = 0;
    let decima = 0;
    let resta = 0;

    for (let i = 0; i < caracteres.length - 1; i++) {
        if (i % 2 == 0) {
            mul = caracteres[i] * 2;
            if (mul > 9) {
                mul = mul - 9;
            }
        } else {
            mul = caracteres[i] * 1;
        }

        suma += mul;
    }

    decima = (Math.floor(suma / 10) + 1) * 10;
    resta = decima - suma;

    if (resta == 10) {
        resta = 0;
    }

    if (resta == caracteres[9]) {
        /* alert("Cédula valida, ingrese sin problema"); */
        document.getElementById("btnEnviar").style.display = "block";
        document.getElementById("btnEnviar").style.margin = "auto";
    } else {
        /* alert("Cédula invalida, revisar"); */
        Swal.fire("Cédula invalida, revisar");
        document.getElementById("btnEnviar").style.display = "none";
    }
}