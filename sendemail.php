<?php
require_once 'config.php';
require 'vendor/autoload.php'; // If you're using Composer (recommended)


$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("aleviroca@hotmail.com", "Amazon love Apple"); //cuenta registrada en sendGrid, Nombre empresa 
$email->setSubject("¡Ya queda menos! Inscribete a la plataforma para recibir tu regalo"); //titulo del correo
$email->addTo("youalevi@gmail.com", "Isaac Rodriguez"); //Destinatario
$email->addContent("text/plain", "and easy to do anywhere, even with PHP"); //Texto plano
$email->addContent(
    "text/html", '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
    
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta name="x-apple-disable-message-reformatting">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="telephone=no" name="format-detection">
        <title></title>
        <!--[if (mso 16)]>
        <style type="text/css">
        a {text-decoration: none;}
        </style>
        <![endif]-->
        <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
        <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
        <o:AllowPNG></o:AllowPNG>
        <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    </head>
    
    <body>
        <div class="es-wrapper-color">
            <!--[if gte mso 9]>
                <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                    <v:fill type="tile" color="#f8f9fd"></v:fill>
                </v:background>
            <![endif]-->
            <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td class="esd-email-paddings" valign="top">
                            <table cellpadding="0" cellspacing="0" class="esd-header-popover es-header" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center">
                                            <table bgcolor="rgba(0, 0, 0, 0)" class="es-header-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p10t es-p15b es-p30r es-p30l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="540" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/22451592470360730.gif" alt style="display: block;" width="130"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center" bgcolor="#f8f9fd" style="background-color: #f8f9fd;">
                                            <table bgcolor="transparent" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600" style="background-color: transparent;">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p20t es-p10b es-p20r es-p20l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-text es-p10b">
                                                                                            <h1>¡Este correo fue creado con fines de estudio lo que veas aqui no es real!</h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-text es-p10t es-p10b">
                                                                                            <p>Usa Drag-n-drop y editores de email HTML:</p>
                                                                                            <p>dos creadores en uno.</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p15t es-m-p15t es-m-p0b es-m-p0r es-m-p0l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="600" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/3991592481152831.png" alt style="display: block;" width="600"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center" bgcolor="#071f4f" style="background-color: #071f4f; background-image: url(https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/10801592857268437.png); background-repeat: no-repeat; background-position: center top;" background="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/10801592857268437.png">
                                            <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p40t es-p40b es-p30r es-p30l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="540" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-spacer" height="20"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text es-p10b">
                                                                                            <h1 style="text-align: center; color: #ffffff;"><b>Columnas — Van más allá de los límites</b></h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-text es-p10t es-p10b">
                                                                                            <p style="color: #ffffff;">Si necesitas hacer un fondo de email, expandir un banner, o resaltar el contenido, utiliza el color de columna.</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center" bgcolor="#f8f9fd" style="background-color: #f8f9fd; background-image: url(https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/83191592482092483.png); background-repeat: no-repeat; background-position: center center;" background="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/83191592482092483.png">
                                            <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p40t es-p15b es-p20r es-p20l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="281" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text">
                                                                                            <h1 style="text-align: center;"><b>Estructura — Crea la base de tu email</b></h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-text es-m-txt-c es-p15t">
                                                                                            <p style="font-size: 16px;">La estructura es el área donde publicas contenido. Utiliza una estructura lista para usar o crea una propia directamente en los ajustes.</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p15t es-p20b es-m-p15t es-m-p20b es-m-p15r es-m-p15l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="600" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/69701592901570150.gif" alt style="display: block;" width="600"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center" bgcolor="#f4f4f4" style="background-color: #f4f4f4; background-image: url(https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/97721592484079114.png); background-repeat: no-repeat; background-position: center top;" background="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/97721592484079114.png">
                                            <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p40t es-p15b es-p20r es-p20l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="281" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text">
                                                                                            <h1 style="text-align: center;"><b>Bloques — Llena un email con contenido</b></h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-text es-m-txt-c es-p15t">
                                                                                            <p style="font-size: 16px;">Bloques básicos como Texto, Botón, etc., e interactivos como Temporizador, Carrusel CAMP, Acordeón AMP, y formularios AMP están a tu servicio.</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p15t es-p20b" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="600" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image es-m-p0t es-m-p0b es-m-p15r es-m-p15l" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/16521592480772953.gif" alt style="display: block;" width="600"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center" bgcolor="#ffffff" style="background-color: #ffffff;">
                                            <table bgcolor="transparent" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600" style="background-color: transparent;">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p40t es-p20b es-p30r es-p30l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="540" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text">
                                                                                            <h2 style="text-align: center;">Cómo puedes usar los bloques de manera positiva</h2>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p20t es-p20b es-p20r es-p20l" align="left">
                                                            <!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="270" valign="top"><![endif]-->
                                                            <table cellpadding="0" cellspacing="0" class="es-left" align="left">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="270" align="left" class="esd-container-frame">
                                                                            <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff" style="background-color: #ffffff; border-radius: 3px; border-collapse: separate;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank" class="rollover"><img class="adapt-img rollover-first" src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/65371592833510113.jpg" alt style="display: block;" width="270">
                                                                                                <div style="mso-hide:all;"><img width="270" class="adapt-img rollover-second" style="max-height: 0px; display: none;" src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/95001592833517910.jpg" alt></div>
                                                                                            </a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text es-m-txt-c es-p10t es-p15r es-p15l">
                                                                                            <h3 style="color: #071f4f; font-size: 22px;">Añade el nombre del producto</h3>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text es-m-txt-c es-p5t es-p15r es-p15l">
                                                                                            <p style="color: #999999;">Escribe una descripción atractiva.</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text es-m-txt-c es-p5t es-p5b es-p15r es-p15l">
                                                                                            <p style="color: #cc0000; font-size: 12px;"><strong>Incluye el precio </strong></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-button es-p10t es-p15b es-p15r es-p15l"><span class="es-button-border"><a href="https://my.stripo.email/cabinet/" class="es-button" target="_blank">Crea
                                                                                                    <!--[if !mso]><!-- --><img src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/44691592486896856.png" alt="icon" width="22" class="esd-icon-right" align="absmiddle" style="margin-left: 9px;">
                                                                                                    <!--<![endif]--></a></span></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td><td width="20"></td><td width="270" valign="top"><![endif]-->
                                                            <table cellpadding="0" cellspacing="0" class="es-right" align="right">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="270" align="left" class="esd-container-frame">
                                                                            <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff" style="background-color: #ffffff; border-radius: 3px; border-collapse: separate;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank" class="rollover"><img class="adapt-img rollover-first" src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/88591592901786286.jpg" alt style="display: block;" width="270">
                                                                                                <div style="mso-hide:all;"><img width="270" class="adapt-img rollover-second" style="max-height: 0px; display: none;" src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/76501592901794063.jpg" alt></div>
                                                                                            </a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text es-m-txt-c es-p10t es-p15r es-p15l">
                                                                                            <h3 style="color: #071f4f; font-size: 22px;">Añade el nombre del producto</h3>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text es-m-txt-c es-p5t es-p15r es-p15l">
                                                                                            <p style="color: #999999;">Escribe una descripción atractiva.</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text es-m-txt-c es-p5t es-p5b es-p15r es-p15l">
                                                                                            <p style="color: #cc0000; font-size: 12px;"><strong>Incluye el precio </strong></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-button es-p10t es-p15b es-p15r es-p15l"><span class="es-button-border"><a href="https://my.stripo.email/cabinet/" class="es-button" target="_blank">Crea
                                                                                                    <!--[if !mso]><!-- --><img src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/44691592486896856.png" alt="icon" width="22" class="esd-icon-right" align="absmiddle" style="margin-left: 9px;">
                                                                                                    <!--<![endif]--></a></span></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td></tr></table><![endif]-->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p30t es-p30b es-p30r es-p30l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="540" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text es-m-txt-c">
                                                                                            <h2 style="text-align: center;">Muestra productos desde todos los ángulos utilizando el efecto rollover.</h2>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p20b es-m-p0t es-m-p20b es-m-p15r es-m-p15l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="600" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/23051592903098544.gif" alt style="display: block;" width="600"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center" bgcolor="#f6f6f6" style="background-color: #f6f6f6; background-image: url(https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/89391592905977960.png); background-repeat: no-repeat; background-position: left top;" background="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/89391592905977960.png">
                                            <table class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p30t es-p30b es-p30r es-p30l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="540" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text es-m-txt-c">
                                                                                            <h1 style="text-align: center;">Crea un banner directamente en el email</h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="600" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-banner" style="position: relative;" esdev-config="h1"><a target="_blank"><img class="adapt-img esdev-stretch-width esdev-banner-rendered" src="https://uxyja.stripocdn.email/content/guids/bannerImgGuid/images/50551595584384960.png" alt title width="100%" style="display: block;"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p10t es-p20b es-p20r es-p20l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-button es-p15t es-p15b es-p10r es-p10l"><span class="es-button-border"><a href="https://my.stripo.email/cabinet/" class="es-button es-button-1625642289885" target="_blank" style="border-width: 10px 20px;">PRUÉBALO
                                                                                                    <!--[if !mso]><!-- --><img src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/32371592816290258.png" alt="icon" width="16" class="esd-icon-right" align="absmiddle" style="margin-left:10px;">
                                                                                                    <!--<![endif]--></a></span></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center" bgcolor="#ff9122" style="background-color: #ff9122; background-image: url(https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/96391592905587990.jpg); background-repeat: no-repeat; background-position: center center;" background="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/96391592905587990.jpg">
                                            <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p40t es-p20r es-p20l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-text es-p10b">
                                                                                            <h1 style="color: #ffffff;">Coloca videos educacionales y divertidos desde Video o YouTube</h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p20t es-p40b es-m-p20t es-m-p0b es-m-p0r es-m-p0l" align="left">
                                                            <table cellspacing="0" cellpadding="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="600" align="left">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-video" align="center"><a target="_blank" href="https://www.youtube.com/watch?v=ryqOEPk51Lg"><img class="adapt-img esdev-stretch-width" src="https://uxyja.stripocdn.email/content/guids/videoImgGuid/images/88641592817182475.png" alt="Stripo.email editor" esdev-video-origin="https://uxyja.stripocdn.email/content/guids/videoImgGuid/images/85841554472642499" title="Stripo.email editor" width="600" esd-play-button-active="red"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center" bgcolor="#f8f9fd" style="background-color: #f8f9fd;">
                                            <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p40t es-p20r es-p20l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-text es-p10b">
                                                                                            <h1>Añade íconos de redes sociales a la información de contacto en el pie de página</h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p20t es-m-p20t es-m-p0b es-m-p15r es-m-p15l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="600" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/88081592909828095.gif" alt style="display: block;" width="600"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p20t es-p30b es-p20r es-p20l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-text">
                                                                                            <p>Además, el uso de correo electrónico y marketing social aumenta drásticamente el CTR.</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center" bgcolor="#ffffff" style="background-color: #ffffff;">
                                            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p40t es-p30r es-p30l" style="background-position: left bottom; background-color: #ffffff;" align="left" bgcolor="#ffffff">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="540" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-text es-p10b es-m-txt-c">
                                                                                            <h1><b>Módulos — Automatiza procesos rutinarios</b></h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text es-p5b es-m-txt-c">
                                                                                            <p style="line-height: 150%;">Utiliza módulos (elementos de contenido diseñados por nosotros para ti) para reducir tareas repetitivas. Tan solo arrastra los que necesites desde Módulos a tu plantilla.</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p20t es-p20b es-m-p20t es-m-p20b es-m-p15r es-m-p15l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="600" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://hpy.stripocdn.email/content/guids/CABINET_0185ec3caf0610f4b9817aa1405149a0/images/16061595603946763.gif" alt style="display: block;" width="600"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center" bgcolor="#f6f6f6" style="background-color: #f6f6f6;">
                                            <table bgcolor="transparent" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p40t es-p20r es-p20l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-text es-m-txt-c es-p10b">
                                                                                            <h1><b>Integración con ESP — Que el mundo vea los resultados de tu trabajo</b></h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text es-m-txt-c es-p5t es-p5b">
                                                                                            <p>Exporta tu email con un solo clic a más de 40 reconocidos ESP, incluyendo Mailchimp, SendGrid, Salesforce MC, y muchos más.</p>
                                                                                            <p>Además, podrás guardarlo como archivo HTML o PDF, o exportarlo como HTML AMP.</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p10t es-m-p10t es-m-p0b es-m-p10r es-m-p10l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="600" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/56361592824544036.png" alt style="display: block;" width="600"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="esd-footer-popover es-footer" align="center" style="background-position: center center;">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center">
                                            <table bgcolor="rgba(0, 0, 0, 0)" class="es-footer-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p40t es-p40b es-m-p40t es-m-p40b es-m-p20r es-m-p20l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="600" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#f0f3fe" style="background-color: #f0f3fe; border-radius: 20px; border-collapse: separate;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text es-p25t es-p10b es-p20r es-p20l">
                                                                                            <h1 style="text-align: center; line-height: 150%;">Stripo es más que un creador. Es una plataforma de diseño de email.</h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-button es-p10t es-p25b es-p20r es-p20l es-m-p15t es-m-p20b es-m-p20r es-m-p20l"><span class="es-button-border"><a href="https://my.stripo.email/cabinet/" class="es-button es-button-1625642289888" target="_blank" style="border-width: 10px 20px;">PRUÉBALO
                                                                                                    <!--[if !mso]><!-- --><img src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/32371592816290258.png" alt="icon" width="16" class="esd-icon-right" align="absmiddle" style="margin-left:10px;">
                                                                                                    <!--<![endif]--></a></span></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
    
    </html>' //Correo en HTML
);
$sendgrid = new \SendGrid( SENDGRID_API_KEY ); //API
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
    echo "CORRECTO";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
    echo "ERROR";
}