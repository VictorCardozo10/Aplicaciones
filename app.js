document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); //evitar envío convencional del formulario

    //obtener los datos del formulario
    let formData = new FormData(this);

    //crear y enviar una solicitud AJAX
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'server.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            //actualizar el contenido de la página con la respuesta del servidor
            document.getElementById('response').innerText = xhr.responseText;
        } else {
            document.getElementById('response').innerText = 'Hubo un problema con la solicitud.';
        }
    };

    //enviar solicitud
    xhr.send(formData);
});
