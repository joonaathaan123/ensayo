
    (function () {
        'use strict';
        window.addEventListener('load', function () {

            var forms = document.getElementsByClassName('needs-validation');

            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                        form.classList.add('was-validated');
                        
                        //Alerta de error al guardar datos por falta de información.
                        swal ( "Oops!" ,  "Compruebe Que Todos Los Campos Estén Completos" ,  "error" );
                    }
                }, false);
            });
        }, false);
    })();
