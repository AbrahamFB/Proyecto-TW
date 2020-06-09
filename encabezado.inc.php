<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F U N</title>
    <link rel="shortcut icon" href="logo/c39bb3c9-47ff-411c-9608-980a819f2463_1024.ico" type="image/x-icon">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="style/font-awesome.css">
    <link rel="stylesheet" href="style/estilos.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/typeahead.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ventanaFlotante.js"></script>
    <script>
        $(document).ready(function(){
        $('input.typeahead').typeahead({
            name: 'busquedaEncabezado',
            remote:'busca.php?key=%QUERY',
            limit : 10
        });
    });
    </script>
    <link rel="stylesheet" href="style/estilo.css">
<body>


