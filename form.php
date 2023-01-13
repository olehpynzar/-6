<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fav1 = $_POST['fav1'];
$fav2 = $_POST['fav2'];
$comment1 = $_POST['comment1'];
$comment2 = $_POST['comment2'];

if (mail("oleh.pynzar@gmail.com",
"Новий лист з сайту",
"Логін".$fio."\n".
"Емейл".$email."\n".
"Яку мову бажає вивчати".$fav1."\n".
"Як себе оцінює".$fav2."\n".
"Додаткова інформація1".$comment1."\n".
"Додаткова інформація2".$comment2,
"From: no-reply@gmail.com \r\n")
) {
    echo ('Лист надісланий, дякую');
}
?>