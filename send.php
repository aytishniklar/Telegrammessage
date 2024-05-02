<?php
$name = $_POST['name'];
$surname = $_POST['surname'];

$token = "7136001812:AAHUrAGkMrWV788Y01CeGlXGpNfp8sPqE9Y";
$chat_id = "-1002100395498";

$array = array(
    'Ismi: ' => $name,
    'Familiya: ' => $surname
);
foreach($array as $key => $value){
 @$text.="<b>".$key."</b>".$value."%0A";
}
$sendTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}","r");
    
    if($sendTelegram){
        echo "Ma`lumot jo`natildi";
    }
?>