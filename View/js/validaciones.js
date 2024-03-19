function habilitarBotone(){
    const botonEditar = document.getElementById("editar");
    const botonEliminar = document.getElementById("eliminar");
    const campoNombre = document.getElementById("nombre");
    const campoApellido = document.getElementById("apellido");
    const campoTelefono = document.getElementById("telefono");

    campoNombre.addEventListener("input", () => {
        if(campoNombre.value === "") {
            botonEditar.disabled = true;
            botonEliminar.desabled = true;
        }else{
            botonEditar.desabled = false;
        }
    });

    if(campoNombre.value === ""){
        botonEditar.disabled = true;
        botonEliminar.desabled = true;
        campoNombre.setAttribute("readonly", true);
        campoApellido.setAttribute("readonly", true);
        campoTelefono.setAttribute("readonly", true);
    }
    else{
        botonEditar.desabled = false;
        botonEliminar.desabled = false;
        campoNombre.setAttribute("readonly", true);
        campoApellido.setAttribute("readonly", true);
        campoTelefono.setAttribute("readonly", true);
    }

    function confirmarOperacion() {

        const botonEditar = document.getElementById("editar");
        const botonEliminar = document.getElementById("eliminar");

        botonEditar.addEventListener("click", (event) => {
            mensaje = "¿Deseas modificar los datos de este Investigador?";
            return confirmar(mensaje, event);
        });


        botonEliminar.addEventListener("click", (event) => {
            mensaje = "¿Deseas eliminar los datos de este Investigador?";
            return confirmar(mensaje, event);
        });
    }

    function confirmar(mensaje, event){
        const respuesta = confirm(mensaje);

        if(!respuesta){
            evento.preventDefault();
        }
    }
}