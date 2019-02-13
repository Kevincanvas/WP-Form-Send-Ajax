/*$.validator.setDefaults({
    submitHandler: function() {
        console.log('enviado');
    }
});*/

$('.custom-file-input').on('change', function() { 
    let fileName = $(this).val().split('\\').pop(); 
    $(this).next('.custom-file-label').addClass("selected").html(fileName); 
});

$(document).ready(function() {

    $("#consulta").validate({

    	ignore: [],    
    	errorClass: 'invalid-feedback animated fadeInDown',
    	errorElement: 'div',
    	errorPlacement: function(error, e) {
    	    jQuery(e).parents('.form-group > div').append(error);
    	},
    	highlight: function(e) {
    	    jQuery(e).closest('.form-control').removeClass('is-invalid').addClass('is-invalid');
    	},
    	success: function(e) {
    	    jQuery(e).closest('.form-group').find('.form-control').removeClass('is-invalid');
    	    jQuery(e).closest('.form-group').find('.form-control').removeClass('is-invalid').addClass('is-valid');
    	    jQuery(e).remove();
    	},

        rules: {
            username: {
                required: true,
                minlength: 4
            },
            email: {
                required: true,
                email: true
            },
            cellphone: {
            	required: true,
                number: true,
            	minlength: 9,
            	maxlength: 9
            },
            agree: "required"
        },
        messages: {
            username: {
                required: "Este campo es requrido",
                minlength: "Este campo debe tener al menos 4 caracteres"
            },
            cellphone: {
            	required: "Este campo es requrido",
                number: "Solo deben ser números",
            	minlength: "Este campo debe tener 9 núneros",
            	maxlength: "Este campo debe tener 9 núneros"
            },
            attached: {
                required: "Debe ingresar un archivo",
            },
            email: "Ingrese un correo válido",
            agree: "Este campo es requerido",
        },
        
    });


    var is_sending = false,
        failure_message = 'Whoops, looks like there was a problem. Please try again later.';

    $('#consulta').submit(function(e) {
        if ( is_sending || !$("#consulta").valid() ) {
            return false; // Don't let someone submit the form while it is in-progress...
        }
        
        e.preventDefault(); // Prevent the default form submit
        $this = $(this); // Cache this

        /*$('.btnEnviar').attr("disabled", true);
        $('.btnEnviar').attr("value", "Enviando...");*/
        $('#loading-form').addClass('d-table');
        $('#loading-form').removeClass('d-none');
        $('#submit_form').remove();

        $.ajax({
            url: $('#admin-ajax').val(), // Let WordPress figure this url out...
            type: 'POST',
            dataType: 'JSON', // Set this so we don't need to decode the response...
            data: $this.serialize(), // One-liner form data prep...
            beforeSend: function() {
                is_sending = true;
                // You could do an animation here...
            },
            /*error: handleFormError,*/
            success: function(data) {
                if (data.status === 'success') {

                    $('input').prop('readonly', true);
                    var menssage = "<div class='alert alert-"+data.status+"' role='alert'>"+data.message+"</div>";
                    $('#btn_submit_container').append(menssage);
                    $('#loading-form').removeClass('d-table');
                    $('#loading-form').addClass('d-none');

                } else {
                    handleFormError();
                    
                }
            }
        });
    });

    function handleFormError() {
        is_sending = false; // Reset the is_sending var so they can try again...
        alert(failure_message);
    }


});

