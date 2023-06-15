<?php
$link = mysqli_connect("localhost", "root", "", 'course');

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно").'<br>';
}

//mysqli_set_charset($con, "utf8");

$sql = 'SELECT * FROM otg';
$result = mysqli_query($link, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<table border="1" cellspacing="0">
    <caption>OTGGGGG</caption>
    <tr>
        <th>id</th> <th>name</th> <th>depart</th>
    </tr>
<?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php print($row['id'])?></td> <td><?php print($row['name_otg'])?></td> <td><?php print($row['name_department'])?></td>
    </tr>

<?php };?>
</table>
<?php //var_dump($rows);
echo '<br>';
echo '================================';
echo '<br>';
?>

 <form action="handler.php">
  <p><b>Как по вашему мнению расшифровывается аббревиатура &quot;ОС&quot;?</b></p>
   <p><select size="1">
    <option disabled>Выберіть ОТГ</option>
        <?php foreach ($rows as $row) {
            echo '<option value="'.$row['name_otg'].'">'.$row['name_otg'].'</option>';

        }

        ?>

   <p><input type="submit" value="Отправить"></p>
 </form>
//echo(mysqli_num_rows($rows));
/*if ($result == false) {
    print("Произошла чудовищная ошибка при выполнении запроса");
	print (mysqli_error($link));
}
else {
	var_dump($rezult);
	
}*/