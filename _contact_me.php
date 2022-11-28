<?php

if( !empty($_POST['submitContactForm']) ) {

    if(empty($_POST['name']) || empty($_POST['email']) || 
        empty($_POST['message']) || empty($_POST['subject']) ||
        isset($_POST['test']) ||
        !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

            echo "<p class='msg-error'>Por favor, verifique los campos obligatorios.</p>";
            return false;
    }
    
    $to = 'joaquin.pestana@entorno-digital.com;';
    //$to = 'joaquin.pestana@entorno-digital.com;hotel@haciendadelcardenal.com';
    

    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $subject = $_POST['subject']; 
    $message = $_POST['message'];

    $email_subject = "[ Contacto ] Solicitud de información";
    $email_body = "Ha recibido un nuevo mensaje desde el formulario de contacto.\n\n".
            "Detalles:\n\nNombre: $name\n\nE-mail: $email_address\n\nAsunto: $subject\n\nMensaje:\n\n$message";

    $headers = "From: $email_address\n";
    $headers .= "Reply-To: $email_address";
     
    if( mail ($to, utf8_decode($email_subject), utf8_decode($email_body), utf8_decode($headers)) ) {
        echo "<p class='msg-ok'>Gracias, su formulario ha sido enviado correctamente</p>";
    }
    else {
        echo "<p class='msg-error'>Lo sentimos, no se ha podido enviar su mensaje.</p>";
    }

} elseif(!empty($_POST['submitRestaurantForm'])) {
    
    if(empty($_POST['date'])) {
        echo "<p class='msg-error'>Por favor, introduzca una fecha.</p>";
            return false;
    }
    
    if(empty($_POST['name']) || empty($_POST['email']) || 
        empty($_POST['phone']) || 
        empty($_POST['hour']) || empty($_POST['commensal']) ||
        !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

            echo "<p class='msg-error'>Por favor, verifique los campos obligatorios.</p>";
            return false;
    }
    
    $to = 'joaquin.pestana@entorno-digital.com;';
    //$to = 'joaquin.pestana@entorno-digital.com;restaurante@haciendadelcardenal.com';
    
    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $phone = $_POST['phone']; 
    $date = $_POST['date'];
    $hour = $_POST['hour'];
    $commensal = $_POST['commensal'];
    $comments = $_POST['comments'];
    
    if(strcmp($_POST['submitRestaurantForm'], "restaurantForm" ) == 0) {
        $email_subject = "[ Restaurante ] Solicitud de información";
        $email_body = "Ha recibido un nuevo mensaje desde el formulario del restaurante.\n\n";
    } 
    
    $email_body .= "Detalles:\n\nNombre: " . $name . 
            "\n\nE-mail: " . $email_address . 
            "\n\nTeléfono: " . $phone .
            "\n\nFecha: " . $date .
            "\n\nHora: " . $hour .
            "\n\nComensales: " . $commensal .
            "\n\nComentarios:\n\n" . $comments;
    
    
    $headers = "From: $email_address\n";
    $headers .= "Reply-To: $email_address";

    if( mail ($to, utf8_decode($email_subject), utf8_decode($email_body), utf8_decode($headers)) ) {
        echo "<p class='msg-ok'>Su reserva será confirmada personalmente al email o teléfono facilitados. Muchas gracias.</p>";
    }
    else {
        echo "<p class='msg-error'>Lo sentimos, no se ha podido enviar su mensaje.</p>";
    } 
    
} elseif (!empty($_POST['submitEventForm'])) {
    if( empty($_POST['email']) || 
        empty($_POST['phone']) || empty($_POST['date']) ||
        empty($_POST['commensal']) || empty($_POST['comments']) ||
        !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

            echo "<p class='msg-error'>Por favor, verifique los campos obligatorios.</p>";
            return false;
    }
    
    if(strcmp($_POST['submitEventForm'], "eventForm" ) == 0 ) {
        if (empty($_POST['name']) || empty($_POST['event'])) {
            echo "<p class='msg-error'>Por favor, verifique los campos obligatorios.</p>";
            return false;
        }
    }
    
    if (strcmp($_POST['submitEventForm'], "corporativeForm" ) == 0 && empty($_POST['contact'])) {
        echo "<p class='msg-error'>Por favor, verifique los campos obligatorios.</p>";
        return false;
    }
    
    $to = 'joaquin.pestana@entorno-digital.com;';
    //$to = 'joaquin.pestana@entorno-digital.com;eventos@haciendadelcardenal.com';
    
    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $phone = $_POST['phone']; 
    $date = $_POST['date'];
    $commensal = $_POST['commensal'];
    $comments = $_POST['comments'];
    $contact = $_POST['contact'];
    
    if(strcmp($_POST['submitEventForm'], "eventForm" ) == 0) {
        $event = $_POST['event'];
        $email_subject = "[ Evento Social ] Solicitud de información";
        $email_body = "Ha recibido un nuevo mensaje desde el formulario de evento social.\n\n" .
            "Detalles:\n\nNombre: $name\n\nE-mail: $email_address\n\nTeléfono:\n\n$phone\n\nFecha:\n\n$date" .
        "\n\nTipo de evento: $event\n\nNúmero de invitados:\n\n$commensal\n\nComentarios:\n\n$comments";
    } else {
        $contact = $_POST['contact'];
        $email_subject = "[ Evento Corporativo ] Solicitud de información";
        $email_body = "Ha recibido un nuevo mensaje desde el formulario de evento corporativo.\n\n" .
        "Detalles:\n\nEmpresa: $name\n\nPersona de contacto: $contact\n\nE-mail: $email_address\n\nTeléfono: $phone\n\nFecha: $date" .
        "\n\nNúmero de invitados: $commensal\n\nNecesidades del evento:\n\n$comments";
    }
   
    
    $headers = "From: $email_address\n";
    $headers .= "Reply-To: $email_address";

    if( mail ($to, utf8_decode($email_subject), utf8_decode($email_body), utf8_decode($headers)) ) {
        echo "<p class='msg-ok'>Gracias, su formulario ha sido enviado correctamente</p>";
    }
    else {
        echo "<p class='msg-error'>Lo sentimos, no se ha podido enviar su mensaje.</p>";
    }
    
} elseif(!empty($_POST['submitWeddingForm'])) {
    
    if(empty($_POST['name']) || empty($_POST['email']) || 
        empty($_POST['phone']) || empty($_POST['date']) ||
        empty($_POST['event']) || empty($_POST['commensal']) ||
        empty($_POST['comments']) ||
        !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

            echo "<p class='msg-error'>Por favor, verifique los campos obligatorios.</p>";
            return false;
    }
    
    $to = 'joaquin.pestana@entorno-digital.com;';
    //$to = 'joaquin.pestana@entorno-digital.com;eventos@haciendadelcardenal.com';
    
    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $phone = $_POST['phone']; 
    $date = $_POST['date'];
    $event = $_POST['event'];
    $commensal = $_POST['commensal'];
    $comments = $_POST['comments'];

    $email_subject = "[ Boda ] Solicitud de información";
    
    $email_body = "Ha recibido un nuevo mensaje desde el formulario de boda.\n\n" .
    "Detalles:\n\nNombre: $name\n\nE-mail: $email_address\n\nTeléfono: $phone\n\nFecha: $date" .
        "\n\nHorario: $event\n\nNúmero de invitados: $commensal\n\nComentarios:\n\n$comments";
    
    
    $headers = "From: $email_address\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";

    if( mail ($to, utf8_decode($email_subject), utf8_decode($email_body), utf8_decode($headers)) ) {
        echo "<p class='msg-ok'>Gracias, su formulario ha sido enviado correctamente</p>";
    }
    else {
        echo "<p class='msg-error'>Lo sentimos, no se ha podido enviar su mensaje.</p>";
    } 
}