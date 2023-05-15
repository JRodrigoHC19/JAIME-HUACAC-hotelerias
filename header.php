<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Registro de Hoteles</title>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- cdn icnonos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="fino.css">
</head>
<body>
    <div class='container-fluid text-white bg-primary'>
            <div class='d-flex justify-content-between'>      
                <div class="fs-3"><a style="text-decoration: None;" class="text-white" href="http://hoteleria.test/index.php">Gestión de Hotelerias</a></div>
                <div class='d-flex align-items-center'>
                    <div class="fs-5"><?php date_default_timezone_set('America/Lima'); setlocale(LC_ALL, 'spanish'); echo date("d - m - Y");?>  |  ADMIN</div>
                </div>        
            </div>
    </div>
