document.addEventListener('DOMContentLoaded', function(){
    const correo = document.getElementById('email');
    const contraseña = document.getElementById('password');
    const form = document.getElementById('formulario__login');
    const errorElement = document.getElementById("error-message"); 

    form.addEventListener('submit', (e) => {
        let messages = []
        if (correo.value === '' || correo.value == null) {
            messages.push("Ingresa tu dirección de correo electrónico");
        }

        if (contraseña.value === '' || contraseña.value == null){
            messages.push("Ingresa tu contraseña")
        }
        if (messages.length > 0 ) {
            e.preventDefault();
            errorElement.innerText = messages.join(', ');
        } else {
            form.submit();
        }
    });
});
const alert = bootstrap.Alert.getOrCreateInstance('error-message')
alert.close()