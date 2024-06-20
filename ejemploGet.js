$(document).ready(function() {
    // URL del servidor que devuelve la lista de usuarios en formato JSON
    var url = "https://api.example.com/users";

    // Realizar una solicitud AJAX GET
    $.get(url, function(data) {
        // data es un array de objetos JSON
        var users = data;

        // Iterar sobre cada usuario y añadir una fila a la tabla
        users.forEach(function(user) {
            var row = `<tr>
                        <td>${user.id}</td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                       </tr>`;
            $('#user-table tbody').append(row);
        });
    })
    .fail(function() {
        alert("Error al cargar los datos de usuarios.");
    });
});
