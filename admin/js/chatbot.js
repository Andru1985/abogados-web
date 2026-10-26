function enviarMensaje(){

    let input = document.getElementById("mensaje");

    let mensaje = input.value;

    if(mensaje == ""){
        return;
    }

    let chatBox = document.getElementById("chat-box");

    /* MENSAJE USUARIO */

    let userDiv = document.createElement("div");

    userDiv.classList.add("mensaje","user");

    userDiv.innerHTML = mensaje;

    chatBox.appendChild(userDiv);

    /* RESPUESTA BOT */

    let botDiv = document.createElement("div");

    botDiv.classList.add("mensaje","bot");

    botDiv.innerHTML = "Procesando consulta jurídica...";

    setTimeout(()=>{

        if(mensaje.toLowerCase().includes("divorcio")){

            botDiv.innerHTML =
            "El divorcio requiere documentación y abogado especializado.";

        }else if(mensaje.toLowerCase().includes("demanda")){

            botDiv.innerHTML =
            "Puedes iniciar una demanda presentando pruebas y documentos.";

        }else{

            botDiv.innerHTML =
            "Gracias por tu consulta. Un abogado responderá pronto.";
        }

    },1000);

    chatBox.appendChild(botDiv);

    input.value = "";

    chatBox.scrollTop = chatBox.scrollHeight;
}