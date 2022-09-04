Este codigo contiene PHP Version 7.4.12
1) Entrar a Sendgrid
2) Clic opcion Email API
3) Integration Guide
4) Elige Web API recomendado
5) Elige PHP
6) Crea tu Clave API
7) Crear un archivo composer.json
8) Descargar composer con lo siguiente: composer install
9) Integra el codigo


Si sale este mensaje, significa que la variable de sendgrid esta mal

401 Array ( [0] => HTTP/1.1 401 Unauthorized [1] => Server: nginx [2] => Date: Thu, 18 Nov 2021 05:04:19 GMT [3] => Content-Type: application/json [4] => Content-Length: 88 [5] => Connection: keep-alive [6] => Access-Control-Allow-Origin: https://sendgrid.api-docs.io [7] => Access-Control-Allow-Methods: POST [8] => Access-Control-Allow-Headers: Authorization, Content-Type, On-behalf-of, x-sg-elas-acl [9] => Access-Control-Max-Age: 600 [10] => X-No-CORS-Reason: https://sendgrid.com/docs/Classroom/Basics/API/cors.html [11] => Strict-Transport-Security: max-age=600; includeSubDomains [12] => [13] => ) {"errors":[{"message":"Permission denied, wrong credentials","field":null,"help":null}]} CORRECTO

deberia quedar de la siguiente forma: $sendgrid = new \SendGrid( SENDGRID_API_KEY );
