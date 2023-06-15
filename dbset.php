<?php
$dbcon = mysqli_connect("localhost", "root", "", 'course');

if ($dbcon == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}
