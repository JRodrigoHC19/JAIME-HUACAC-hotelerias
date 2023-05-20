<?php if (!isset($_GET['codigo'])) {header('Location: ../index.php?mensaje=error') ;exit(); }

include '../conectando/conexion.php';
$dato = $_GET['codigo'];


$sentencia = $database->prepare("SELECT promocion, duracion, celular, id_hotel FROM promociones WHERE id_promo = ?;");
$sentencia->execute([$dato]);
$hotel = $sentencia->fetch(PDO::FETCH_OBJ);
$hotel_id = $hotel->id_hotel;
$sentencia1 = $database->prepare("SELECT * FROM registerhotel WHERE id = ?;");
$sentencia1->execute([$hotel_id]);
$hotelito_seleccionado = $sentencia1->fetch(PDO::FETCH_OBJ);

    $url = "https://api.green-api.com/waInstance1101822972/SendMessage/73eb30504f484d268665e0c1f1e96bae7e022f6ab2a242669c";
    $data = [
        "chatId" => "51".$hotel->celular."@c.us",
        "message" =>  'Solo *'.strtoupper($hotel->duracion).'* el Hotel *'.strtoupper($hotelito_seleccionado->title).'* te ofrece una promoción indicando que: *'.strtoupper($hotel->promocion).'*.'
            ];
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'content' => json_encode($data),
            'header' =>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
        )
    );

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$response = json_decode($result);
header('Location: ../crud_promocion/intf_promo.php?id='.$hotel_id);
?> 
