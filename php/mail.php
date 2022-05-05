<?php
$messege = '';
$messege .= '<h1>Рассчет с сайта eks-spb.com</h1>';
$messege .= '<p>Имя: '. $_POST['ename'] . '</p>';
$messege .= '<p>Телефон заказчика: '. $_POST['ephone'] . '</p>';
$messege .= '<p>страница заявки: '. $_POST['typework'] . '</p>';



$to = '79602835254@yandex.ru, kran-eks@bk.ru'.',';
// $to = '79602835254@yandex.ru'.',';
$spectext = '<!DOCTYPE HTML><html><head><title>Расчет</title></head><body>';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'from: adm@boroda.website' . "\r\n";

$m = mail($to, 'заявка с сайта eks-spb.com', $spectext.$messege.'</body></html>', $headers);

if ($m) {echo 1;} else {echo 0;}

?>
