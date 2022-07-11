<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <style>
        p{
            color:#727272;
        }
        h4{
            color: #4D4E4C;
        }

        hr{
            color: #CED3CD;
        }

        h3{
             color: #4D4E4C;
        }

        img{
            width: 500px;
            padding: 10px;
            border-color: white;
        }
    </style>
</head>
<body>
    <h3>Este mensaje es enviado desde la pagina principal de gesccol.gov.co</h3>
    <br>
    <p>---------------------------------------------------------------------</p>

    <br>

    <h4><strong>Nombres</strong></h4>
    <p>{{$contacto['nombre']}}</p>

    <hr>

    <h4><strong>Email</strong></h4>
    <a href="mailto:{{$contacto['email']}}">{{$contacto['email']}}</a>

    <hr>

    <h4><strong>Telefono</strong></h4>
    <p> {{$contacto['tel']}}</p>

    <hr>

    <h4><strong>Mensaje</strong></h4>
    <p> {{$contacto['mensaje']}}</p>

    <p><strong>Sitio:</strong> gesccol.gov.co</p>

    <p>-----------------------------------------------------------------------</p>

    <br>

    <img src="https://i.postimg.cc/7LMC0Y85/logo-gesccol-2.png" alt="gesccol-logo">


</body>
</html>