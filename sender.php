<?php

$mail="mail@mail.ru"; // Почта на которую пойдет письмо
$subject ="Test" ; // Тема письма
$text= "Line 1\nLine 2\nLine 3"; // Текст письма

if( mail($mail, $subject, $text) )
{
	echo 'Успешно отправлено!'; }
		else{
	echo 'Отправка не удалась!';
	}

?>