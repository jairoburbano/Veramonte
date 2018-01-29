(function ( $ ) {
    $.validator.addMethod("customemail", 
                          function(value, element) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(value);
    }, 
                          "Tu correo no es válido"
                         );
    /**
     * Validación del formulario usando jQuery Validate
     */
    function newsletter() {
        $('<div class="message"></div>').appendTo('.newsletter__block');
        $('.newsletter').validate({
            rules: {
                mail: {
                    required: true,
                    customemail: true
                },
            },
            messages: {
                mail: {
                    required: "Este campo es requerido",
                    email: "Correo inválido"
                },
            },
            errorElement: 'p',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.input-group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.input-group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.newsletter'),
                    formURL = form.attr("action");

                var formData = new FormData($('.newsletter')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        $('.newsletter .message').html('<p class="warning-msg">Error inesperado, intentalo mas tarde.</p>').removeClass('hidden');
                    },
                    success : function(result) {
                        var obj = result;
                        if (obj.exito === 'exito') {
                            $('.newsletter__block .loading').fadeOut();
                            $('.newsletter__block .message').html('<p class="success-msg">Tu Mensaje ha sido enviado con éxito</p>').fadeIn().delay(3000).fadeOut();
                            $('.newsletter').find('.form__valid').removeClass('form__valid');
                            $('.newsletter')[0].reset();
                        } else {
                            $('.newsletter .message').html('<p class="warning-msg">'+obj.message+'</p>').removeClass('hidden');
                        }
                    }
                } );
                return false;
            }
        });
    }
    function contact() {
        $('<div class="message"></div>').appendTo('.contact-form');
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Value must not equal arg.");
        $('.contact-form').validate({
            rules: {
                nickname: "required",
                lastname: "required",
                place: {
                    required: true, 
                    valueNotEquals: "default" 
                },
                mail: {
                    required: true,
                    customemail: true
                },
                message: {
                    required:true,
                    minlength:8
                },
            },
            messages: {
                nickname: {
                    required: "Usa solo letras"
                },
                lastname: {
                    required: "Usa solo letras"
                },
                place: {
                    required: "Debes elegir una",
                    valueNotEquals: "Debes elegir una"
                },
                mail: {
                    required: "Este campo es requerido",
                    email: "Correo inválido"
                },
                message: {
                    required: "Ingresar un mensaje/consulta",
                    minlength: "Ingresa al menos 8 caracteres."
                }
            },
            errorElement: 'p',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                $('.cssload-dots').slideDown();
                var form = $('.contact-form'),
                    formURL = form.attr("action");

                var formData = new FormData($('.contact-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        $('.cssload-dots').slideUp();
                        $('.contact-form .message').html('<p class="warning-msg">Ocurrió un problema y el mensaje no fue enviado. Por favor intenta de nuevo.</p>').removeClass('hidden');
                    },
                    success : function(result) {
                        $('.cssload-dots').slideUp();
                        var obj = result;
                        if (obj.exito === 'exito') {
                            $('.contact .loading').fadeOut();
                            $('.contact .message').html('<p class="success-msg">El mensaje fue enviado exitosamente. Gracias por contactarnos.</p>').fadeIn().delay(3000).fadeOut();
                            $('.contact-form').find('.form__valid').removeClass('form__valid');
                            $('.contact-form')[0].reset();
                        } else {
                            $('.contact-form .message').html('<p class="warning-msg">'+obj.message+'</p>').removeClass('hidden');
                        }
                    }
                } );
                return false;
            }
        });
    }
    newsletter();
    contact();
})(jQuery);