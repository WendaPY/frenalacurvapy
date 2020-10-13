<?php
// @codingStandardsIgnoreFile


return [
    'In order to receive posts by email, please input your email account settings below'
        => 'Para poder recibir publicaciones por correo electrónico,' .
           'por favor ingrese la configuración de su cuenta de correo electrónico a continuación',
    'Incoming Server Type'=> 'Tipo de servidor entrante',
    'Incoming Server' => 'Servidor de entrada',
    'Examples: mail.yourwebsite.com, imap.gmail.com, pop.gmail.com'
        => 'Ejemplos: mail.yourwebsite.com, imap.gmail.com, pop.gmail.com',
    'Incoming Server Port' => 'Puerto de servidor de entrada',
    'Common ports: 110 (POP3), 143 (IMAP), 995 (POP3 with SSL), 993 (IMAP with SSL)'
        => 'Puertos comunes: 110 (POP3), 143 (IMAP), 995 (POP3 con SSL), 993 (IMAP con SSL)',
    'Incoming Server Security' => 'Seguridad del Servidor Entrante',
    'Incoming Username' => 'Nombre de Usuario Entrante',
    'Email account username' => 'Nombre de usuario de la cuenta de correo electrónico',
    'Incoming Password' => 'Contraseña entrante',
    'Outgoing Server Type' => 'Tipo de Servidor de Salida',
    'Outgoing Server' => 'Servidor de Salida',
    'Email account password' => 'Contraseña de cuenta de correo electrónico',
    'Examples: smtp.yourhost.com, smtp.gmail.com' => 'Ejemplos: smtp.yourhost.com, smtp.gmail.com',
    'Common ports: 25 (SMTP default), 465 (SMTP with SSL)'
        => 'Puertos comunes: 25 (SMTP predeterminado), 465 (SMTP con SSL)',
    'Outgoing Server Security' => 'Seguridad del Servidor de Salida',
    'Outgoing Username' => 'Nombre de Usuario de Salida',
    'Outgoing Password' => 'Contraseña de Salida',
    'Email Address' => 'Dirección de Correo electrónico',
    'This will be used to send outgoing emails' => 'Este se usará para enviar correos electrónicos salientes',
    'Email Sender Name' => 'Nombre del remitente de correo electrónico',
    'Appears in the \'from:\' field on outgoing emails'
        => 'Aparece en el campo \'de:\' en los correos electrónicos salientes',
    'Key' => 'Clave',
    'The API key' => 'La clave API',
    'Secret' => 'Código secreto',
    'Set a secret so that only authorized FrontlineCloud accounts can send/recieve message. You need to configure the same secret in the FrontlineCloud Activity.'
        => 'Establezca un código secreto para que sólo las cuentas FrontlineCloud autorizadas puedan enviar\/recibir mensajes. Necesita configurar el mismo código secreto en la Actividad de FrontlineCloud.',
    'From' => 'Desde',
    'The from number' => 'El número desde',
    'The secret value' => 'El valor secreto',
    'API Key' => 'Clave API',
    'API secret' => 'Código secreto API',
    'The API secret' => 'El código secreto API',
    'Step 1: Download the "SMSSync" app from the Android Market.'
        => 'Paso 1: Descargue la aplicación "SMSSync" del Android Market.',
    'Scan this QR Code with your phone to download the app from the Android Market <img src="'. url('/images/smssync.png') .'" width="150"/>'
        => 'Escanee este código QR con su teléfono para descargar la aplicación desde el Android Market' . url('/images/smssync.png') . '" width="150"/>',
    'Turn on SMSSync and use the following link as the Sync URL:' . url('sms/smssync')
        => 'Active SMSSync y use el siguiente enlace como el URL de sincronización:' . url('sms/smssync'),
    'Set a secret so that only authorized SMSSync devices can send/recieve message. You need to configure the same secret in the SMSSync App.'
        => 'Establezca un código secreto para que sólo los dispositivos SMSSync autorizados puedan enviar\/recibir mensajes. Debe configurar el mismo código secreto en la aplicación SMSSync',
    'Phone Number' => 'Número de teléfono',
    'The from phone number. A Twilio phone number enabled for the type of message you wish to send.'
        => 'El número de teléfono del desde Un número de teléfono Twilio habilitado para el tipo de mensaje que desea enviar.',
    'Account SID' => 'Cuenta SID',
    'The unique id of the Account that sent this message.' => 'La identificación única de la Cuenta que envió este mensaje',
    'Auth Token' => 'Token de Autenticación',
    'SMS Auto response' => 'Respuesta automática de SMS',
    'Step 1: Create a new Twitter application' => 'Paso 1: Cree una nueva aplicación de Twitter',
    'Create a <a href="https://apps.twitter.com/app/new">new twitter application</a>'
        => 'Cree una <a href="https://apps.twitter.com/app/new">nueva aplicación de twitter</a>',
    'Step 2: Generate a consumer key and secret' => 'Paso 2: Genere una clave de consumidor y código secreto',
    'Once you\'ve created the application click on "Keys and Access Tokens".<br /> Then click "Generate Consumer Key and Secret".<br /> Copy keys, tokens and secrets into the fields below.'
        => 'Una vez que haya creado la aplicación, haga clic en "Tokens Clave y de Acceso".<br /> Luego haga clic en "Generar clave de consumidor y código secreto".<br /> Copie las claves, los tokens y los códigos secretos en los campos de abajo.',
    'Consumer Key' => "Clave de Consumidor",
    'Add the consumer key from your Twitter app.' => 'Agregue la clave del consumidor desde su aplicación de Twitter.',
    'Consumer Secret' => 'Código Secreto del Consumidor',
    'Add the consumer secret from your Twitter app.'
        => 'Agregue el código secreto del consumidor desde su aplicación de Twitter.',
    'Access Token' => 'Token de Acceso',
    'Add the access token you generated for your Twitter app.'
        => 'Agregue el token de acceso que generó para su aplicación de Twitter.',
    'Access Token Secret' => 'Código Secreto del Token de Acceso',
    'Add the access secret that you generated for your Twitter app.'
        => 'Agregue el código secreto de acceso que generó para su aplicación de Twitter.',
    'Twitter search terms' => 'Términos de búsqueda de Twitter',
    'Add search terms separated with commas' => 'Agregar términos de búsqueda separados con comas'
];
