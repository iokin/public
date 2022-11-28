// jquery for lupa

$(function() {
    // OPACITY OF BUTTON SET TO 0%
    $(".roll").css("opacity","0");

    // ON MOUSE OVER
    $(".roll").hover(function () {

        // SET OPACITY TO 70%
        $(this).stop().animate({
        opacity: .7
        }, "slow");
    },
 
    // ON MOUSE OUT
    function () {
        // SET OPACITY BACK TO 50%
        $(this).stop().animate({
        opacity: 0
        }, "slow");
    });
});


$( document ).ready( function () {
    $( "#contactForm" ).validate( {
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                required: true
            },
            message: {
                required: true
            },
            agree: {
                required: true
            }
        },
        messages: {
            name: "Este campo es obligatorio",
            email: "Introduzca un e-mail válido",
            subject: "Este campo es obligatorio",
            message: "Este campo es obligatorio",
            agree: "Acepte las condiciones de uso y la política de privacidad."
        },
        
        errorElement: "em",
                errorPlacement: function ( error, element ) {
                    
                error.addClass( "error" );

                if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.parent( "label" ) );
                } else {
                        error.appendTo(element.prev());
                }
        }
    } );
} );


$("#contactForm").submit(function(event) {
    event.preventDefault();
    
    var isValid = $(this).valid();

    if (!isValid) {
        return false;
    }

    var $form = $( this ),
        $submit = $form.find( 'button[type="submit"]' ),
        name_value = $form.find( 'input[name="name"]' ).val(),
        email_value = $form.find( 'input[name="email"]' ).val(),
        subject_value = $form.find( 'input[name="subject"]' ).val(),
        agree_value = $form.find( 'input[name="agree"]' ).val(),
        message_value = $form.find( 'textarea[name="message"]' ).val(),
        submit_value = $form.find( 'button[name="submitContactForm"]' ).val(),
        url = $form.attr('action');

    var posting = $.post( url, { 
                    name: name_value, 
                    email: email_value,
                    subject: subject_value,
                    submitContactForm: submit_value,
                    message: message_value,
                    agree: agree_value
                });

    posting.done(function( data )
    {
        $( "#contactResponse" ).html(data);
    });
});


$(document).ready( function () {
    $( "#restaurantForm" ).validate( {
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                number:true
            },
            commensal: {
                required: true,
                number:true
            },
            hour: {
                required: true
            },
            agree: {
                required: true
            }
        },
        messages: {
            name: "Este campo es obligatorio",
            email: "Introduzca un e-mail válido",
            phone: "Campo obligatorio. No escribir espacios ni guiones",
            date: "Este campo es obligatorio",
            hour: "Este campo es obligatorio",
            comments: "Este campo es obligatorio",
            commensal: "Debe introducir un valor válido",
            agree: "Acepte las condiciones de uso y la política de privacidad."
        },
        errorElement: "em",
                errorPlacement: function ( error, element ) {

                error.addClass( "error" );

                if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.parent( "label" ) );
                } else {
                        error.appendTo(element.prev());       
                }
        }
    } );
} );


$("#restaurantForm").submit(function(event) {
    event.preventDefault();
    
    var isValid = $(this).valid();

    if (!isValid) {
        return false;
    }

    var $form = $( this ),
        $submit = $form.find( 'button[type="submit"]' ),
        name_value = $form.find( 'input[name="name"]' ).val(),
        email_value = $form.find( 'input[name="email"]' ).val(),
        phone_value = $form.find( 'input[name="phone"]' ).val(),
        date_value = $form.find( 'input[name="date"]' ).val(),
        hour_value = $form.find( 'select[name="hour"]' ).val(),
        commensal_value = $form.find( 'input[name="commensal"]' ).val(),
        comments_value = $form.find( 'textarea[name="comments"]' ).val(),
        submit_value = $form.find( 'button[name="submitRestaurantForm"]' ).val(),
        url = $form.attr('action');

    var posting = $.post( url, { 
                    name: name_value, 
                    email: email_value,
                    phone: phone_value,
                    comments: comments_value,
                    date: date_value,
                    hour: hour_value,
                    commensal: commensal_value,
                    submitRestaurantForm: submit_value
                });

    posting.done(function( data )
    {
        $( "#restaurantResponse" ).html(data);
    });
});

$(document).ready( function () {
    $( "#eventForm" ).validate( {
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                number:true
            },
            commensal: {
                required: true,
                number:true
            },
            event: {
                required: true
            },
            comments: {
                required: true
            },
            agree: {
                required: true
            }
        },
        messages: {
            name: "Este campo es obligatorio",
            email: "Introduzca un e-mail válido",
            phone: "Campo obligatorio. No escribir espacios ni guiones",
            date: "Este campo es obligatorio",
            event: "Este campo es obligatorio",
            comments: "Este campo es obligatorio",
            commensal: "Debe introducir un valor válido",
            agree: "Acepte las condiciones de uso y la política de privacidad."
        },
        errorElement: "em",
                errorPlacement: function ( error, element ) {

                error.addClass( "error" );

                if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.parent( "label" ) );
                } else {
                        error.appendTo(element.prev());    
                }
        }
    } );
} );


$("#eventForm").submit(function(event) {
    event.preventDefault();
    
    var isValid = $(this).valid();

    if (!isValid) {
        return false;
    }

    var $form = $( this ),
        $submit = $form.find( 'button[type="submit"]' ),
        name_value = $form.find( 'input[name="name"]' ).val(),
        email_value = $form.find( 'input[name="email"]' ).val(),
        phone_value = $form.find( 'input[name="phone"]' ).val(),
        date_value = $form.find( 'input[name="date"]' ).val(),
        event_value = $form.find( 'select[name="event"]' ).val(),
        commensal_value = $form.find( 'input[name="commensal"]' ).val(),
        comments_value = $form.find( 'textarea[name="comments"]' ).val(),
        submit_value = $form.find( 'button[name="submitEventForm"]' ).val(),
        url = $form.attr('action');

    var posting = $.post( url, { 
                    name: name_value, 
                    email: email_value,
                    phone: phone_value,
                    comments: comments_value,
                    date: date_value,
                    event: event_value,
                    commensal: commensal_value,
                    submitEventForm: submit_value
                });

    posting.done(function( data )
    {
        $( "#eventResponse" ).html(data);
    });
});



$(document).ready( function () {
    $( "#eventCorporativeForm" ).validate( {
        rules: {
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                number:true
            },
            commensal: {
                required: true,
                number:true
            },
            contact: {
                required: true
            },
            comments: {
                required: true
            },
            agree: {
                required: true
            }
        },
        messages: {
            email: "Introduzca un e-mail válido",
            phone: "Campo obligatorio. No escribir espacios ni guiones",
            date: "Este campo es obligatorio",
            contact: "Este campo es obligatorio",
            comments: "Este campo es obligatorio",
            commensal: "Debe introducir un valor válido",
            agree: "Acepte las condiciones de uso y la política de privacidad."
        },
        errorElement: "em",
                errorPlacement: function ( error, element ) {

                error.addClass( "error" );

                if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.parent( "label" ) );
                } else {
                        error.appendTo(element.prev());        
                }
        }  
    } );
} );


$("#eventCorporativeForm").submit(function(event) {
    event.preventDefault();
    
    var isValid = $(this).valid();

    if (!isValid) {
        return false;
    }

    var $form = $( this ),
        $submit = $form.find( 'button[type="submit"]' ),
        name_value = $form.find( 'input[name="name"]' ).val(),
        email_value = $form.find( 'input[name="email"]' ).val(),
        phone_value = $form.find( 'input[name="phone"]' ).val(),
        date_value = $form.find( 'input[name="date"]' ).val(),
        contact_value = $form.find( 'input[name="contact"]' ).val(),
        commensal_value = $form.find( 'input[name="commensal"]' ).val(),
        comments_value = $form.find( 'textarea[name="comments"]' ).val(),
        submit_value = $form.find( 'button[name="submitEventForm"]' ).val(),
        url = $form.attr('action');

    var posting = $.post( url, { 
                    name: name_value, 
                    email: email_value,
                    phone: phone_value,
                    comments: comments_value,
                    date: date_value,
                    contact: contact_value,
                    commensal: commensal_value,
                    submitEventForm: submit_value
                });

    posting.done(function( data )
    {
        $( "#eventCorporativeResponse" ).html(data);
    });
});


$(document).ready( function () {
    $( "#eventWeddingForm" ).validate( {
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                number:true
            },
            commensal: {
                required: true,
                number:true
            },
            schedule: {
                required: true
            },
            comments: {
                required: true
            },
            agree: {
                required: true
            }
        },
        messages: {
            name: "Este campo es obligatorio",
            email: "Introduzca un e-mail válido",
            phone: "Campo obligatorio. No escribir espacios ni guiones",
            date: "Este campo es obligatorio",
            schedule: "Este campo es obligatorio",
            comments: "Este campo es obligatorio",
            commensal: "Debe introducir un valor válido",
            agree: "Acepte las condiciones de uso y la política de privacidad."
        },
        errorElement: "em",
                errorPlacement: function ( error, element ) {

                error.addClass( "error" );

                if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.parent( "label" ) );
                } else {
                        error.appendTo(element.prev());
                        
                }
        }   
    } );
} );


$("#eventWeddingForm").submit(function(event) {
    event.preventDefault();
    
    var isValid = $(this).valid();

    if (!isValid) {
        return false;
    }

    var $form = $( this ),
        $submit = $form.find( 'button[type="submit"]' ),
        name_value = $form.find( 'input[name="name"]' ).val(),
        email_value = $form.find( 'input[name="email"]' ).val(),
        phone_value = $form.find( 'input[name="phone"]' ).val(),
        date_value = $form.find( 'input[name="date"]' ).val(),
        event_value = $form.find( 'select[name="event"]' ).val(),
        commensal_value = $form.find( 'input[name="commensal"]' ).val(),
        comments_value = $form.find( 'textarea[name="comments"]' ).val(),
        submit_value = $form.find( 'button[name="submitWeddingForm"]' ).val(),
        url = $form.attr('action');

    var posting = $.post( url, { 
                    name: name_value, 
                    email: email_value,
                    phone: phone_value,
                    comments: comments_value,
                    date: date_value,
                    event: event_value,
                    commensal: commensal_value,
                    submitWeddingForm: submit_value,
                });

    posting.done(function( data )
    {
        $( "#weddingResponse" ).html(data);
    });
});


$(function($){
$('#date').datepicker({
    language: "es",
    todayHighlight: true,
    toggleActive: true,
    autoclose: true
});
});
