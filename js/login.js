

/*document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Validate email and password
    if (email && password) {
        // Send a request to the server to log in the user
        // If the login is successful, redirect the user to index.php
        fetch('login.php', {
            method: 'POST',
            body: new FormData(document.getElementById('loginForm'))
        })
      .then(response => response.json())
      .then(data => {
            if (data.success) {
                // Set the user's email in local storage
                localStorage.setItem('userEmail', email);
                // Redirect to the index page
                window.location.href = 'index.php';
            } else {
                alert('Invalid email or password');
            }
        })
      .catch(error => console.error(error));
    } else {
        alert('Please enter your email and password.');
    }
});*/



$("#btnLogin").click(function (e) { 
    e.preventDefault(); 
    

    cargarTabla();
  
});


function cargarTabla() {
    //petición asincrona
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/todosusuarios", //ocupo nombre api
        dataType: "JSON",
        success: function (res) {
            //console.log(res)
            login(res);
           
            //mostrar filas en la tabla
           
        }, error: function (xhr) {
            console.log(xhr.statusText + xhr.responseText)
        }, complete: function () {
            console.log("Terminado")
        }
    });

}

function login(res){
    var correo = $("#email").val();
    var contrasenia = $("#password").val();
    
    console.log(correo);
    console.log(contrasenia);
    
    var encontrado = false; // Variable para indicar si se encontró el usuario
    
    res.forEach(p => {
        if (correo == p.correo && contrasenia == p.contrasenia) {
            alert("¡Bienvenido " + p.usuario + "!");
            encontrado = true; // Indicar que se encontró el usuario
            localStorage.setItem('usuario', p.usuario);
            window.location.href = 'index.php';
            return; // Se detiene el ciclo forEach cuando se muestra el alert
        }
    });
    
    // Si no se encontró el usuario, mostrar un mensaje de error
    if (!encontrado) {
        alert("Correo electrónico o contraseña incorrecta");
    }
    
    


}