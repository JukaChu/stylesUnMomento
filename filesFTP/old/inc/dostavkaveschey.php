<?php
include("protection.php");
include("constant.php");
include("global.php");
include("engine.php");
require("connection.php");
ini_set("display_errors","On");

if ($_POST['phone']){
    $phone = $_POST['phone'];
}
// телефон

if ($_POST['name']){
    $name = $_POST['name'];
} else {
    $name = '';
}
$OrderArray = $_POST['orders'];
$par = 14;
$data = $_POST['datetime'];


$comment ='';
for ($i=0; $i<count($OrderArray); $i++) {
    $comment  .= 'Товар:' . $OrderArray[$i]['tovar'];
}

// параметры для формы

$array_to_ins = array(
    61 => $phone,
    62 => $name,
    63 => $comment,
    64 => $data
);


if ($phone && $name && $OrderArray) {

    $id_parent = dbNonQuery("INSERT INTO requests (create_date,parentid,ip) VALUES (now(),14,'$_SERVER[REMOTE_ADDR]')", array(), TRUE);

    foreach ($array_to_ins as $key => $value) {
        $id = dbNonQuery("INSERT INTO requestitem (val, fieldid, parentid) VALUES
                          ('".$value."', ".$key.", ".$id_parent.")", array(), TRUE);
    }
}

function SendMessageBack($phone, $name, $OrderArray, $data)
{
    $orders  = '';
    $email_ = dbQuery("SELECT val FROM settings where name = 'contact_email'");

    foreach($email_ as $val)
    {
        $to = $val["val"];
    }

    $subject = "Доставка речей";

    for ($i=0; $i<count($OrderArray); $i++) {
        $orders  .= '<tr>
                       <td>' . $OrderArray[$i]['tovar'] . '</td>
                    </tr>';
    }

    $message = '
<html>
    <head>
        <title>Доставка речей </title>
    </head>
    <body>
        <p>Телефон:'.$phone.' </p>
        <p>І\'мя: '. $name.' </p>
        <p>Дата доставки:'.$data.' </p>
        <table>
            <tr>
                <td>Товар</td>
            </tr>';
    $message .= $orders;
    $message .= '
        </table>
    </body>
</html>';



    $headers = "Content-type: text/html; charset=utf-8 \r\n";

    $from = "no-replay@unmomento.com";
    $headers .= "From: $from";

    $mal = mail($to, $subject, $message, $headers);
    if ($mal){
        echo "Ваше повідомлення успішно відправленно.";
    } else {
        echo "Ваше повідомлення не відправленно.";
    }
}

if ($phone && $OrderArray && $name) {
    SendMessageBack($phone, $name, $OrderArray,$data);
}

?>
