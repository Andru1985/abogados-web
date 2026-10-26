/* =========================================================
   ESPERAR CARGA
========================================================= */

document.addEventListener("DOMContentLoaded", ()=>{

    const chat = document.getElementById("chat");

    const input = document.getElementById("mensaje");

    const chatBody = document.getElementById("chat-body");

    /* =====================================================
       OCULTAR CHAT
    ===================================================== */

    chat.classList.remove("active");

    /* =====================================================
       ABRIR CHAT
    ===================================================== */
   window.abrirChat = function(){

    chat.classList.toggle("active");

    }

    /* =====================================================
       CERRAR CHAT
    ===================================================== */

    window.cerrarChat = function(){

        chat.classList.remove("active");

    }

    /* =====================================================
       AGREGAR MENSAJE
    ===================================================== */

    function agregarMensaje(tipo,texto){

        let div = document.createElement("div");

        div.className = tipo;

      if(tipo === "bot"){

    div.innerHTML = `

        <div class="bot-contenido">

            <img src="img/avatar.png" class="bot-avatar">

            <span>${texto}</span>

        </div>

    `;

}else{

    div.innerHTML = texto;

}

        chatBody.appendChild(div);

        chatBody.scrollTop = chatBody.scrollHeight;

    }

    /* =====================================================
       ENVIAR MENSAJE
    ===================================================== */

    window.enviarMensaje = function(){

        let texto = input.value.trim();

        if(texto === "") return;

        agregarMensaje("user", texto);

        input.value = "";

        let escribiendo = document.createElement("div");

        escribiendo.className = "bot";

        escribiendo.innerHTML = "✍️ Escribiendo...";

        chatBody.appendChild(escribiendo);

        chatBody.scrollTop = chatBody.scrollHeight;

        fetch("http://localhost/abogados-web/chatbot.php", {

            method:"POST",

            headers:{
                "Content-Type":"application/x-www-form-urlencoded"
            },

            body:"mensaje="+encodeURIComponent(texto)

        })

        .then(res => res.text())

        .then(data => {

            escribiendo.remove();

            agregarMensaje("bot", data);

        })

        .catch(error => {

            escribiendo.remove();

            agregarMensaje(

                "bot",

                "❌ Error de conexión"

            );

        });

    }

    /* =====================================================
       ENTER
    ===================================================== */

    input.addEventListener("keypress", function(e){

        if(e.key === "Enter"){

            enviarMensaje();

        }

    });

});