
<meta charset="utf-8">
<?php
$theme="Новый клиент";
error_reporting( E_ERROR );
if (isset($_POST['fio']))			{$fio			= $_POST['fio'];		if ($fio == '')	{unset($fio);}}
if (isset($_POST['country']))			{$country			= $_POST['country'];		if ($country == '')	{unset($country);}}
if (isset($_POST['city']))			{$city			= $_POST['city'];		if ($city == '')	{unset($city);}}
if (isset($_POST['address']))			{$address			= $_POST['address'];		if ($address == '')	{unset($address);}}
if (isset($_POST['phone']))			{$phone			= $_POST['phone'];		if ($phone == '')	{unset($phone);}}
if (isset($_POST['email']))			{$email			= $_POST['email'];		if ($email == '')	{unset($email);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}

if (isset($fio) ) {
$fio=stripslashes($fio);
$fio=htmlspecialchars($fio);
}
if (isset($country) ) {
$country=stripslashes($country);
$country=htmlspecialchars($country);
}
if (isset($city) ) {
$city=stripslashes($city);
$city=htmlspecialchars($city);
}
if (isset($address) ) {
$address=stripslashes($address);
$address=htmlspecialchars($address);
}
if (isset($phone) ) {
$phone=stripslashes($phone);
$phone=htmlspecialchars($phone);
}
if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}

$address1="nspproducts777@gmail.com";

$note_text=" ФИО : $fio \r\n Страна : $country \r\n Город : $city \r\n Адрес : $address \r\n Телефон : $phone \r\n Эмейл : $email";

if (isset($fio)  &&  isset ($sab) ) {
mail($address1,$theme,$note_text,"Content-type:text/plain; windows-1251");

echo "<p style='color:#009900;'><b>$fio</b>, дисконтная карта NSP успешно зарегистрирована. <br> Благодарим Вас!</p>";
}
?>
