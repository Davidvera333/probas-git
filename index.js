window.addEventListener('load', function() {
   
    // JavaScript para validar el formulario
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', async function (event) {
                    event.preventDefault();
                    
                    if (!form.checkValidity()) {
                        event.stopPropagation();
                        form.classList.add('was-validated');
                        return;
                    }
                    
                    form.classList.add('was-validated');
                    
                    // Mostrar SweetAlert
                    await Swal.fire({
                        icon: 'success',
                        title: 'Formulario enviado',
                        text: 'Gracias por su mensaje!',
                        confirmButtonText: 'Aceptar',
                        timer: 2000, // El alert se cerrará automáticamente después de 2 segundos
                        timerProgressBar: true // Muestra una barra de progreso
                    });

                    // Esperar 2 segundos antes de redireccionar
                    setTimeout(() => {
                        window.location.href = 'index.html'; // Cambia esto por la URL a la que quieres redireccionar
                    }, 2000);
                }, false)
            })
    })()
});