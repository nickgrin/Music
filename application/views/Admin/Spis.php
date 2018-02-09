<div class="width1024">

<div class="title">
    <span>
        Зона администратора
    </span>
</div>

<h2>Список пользователей</h2>

<table>
      <tr><th>Имя</th><th>Логин</th><th>Пароль</th><th>Телефон</th><th>Управление</th></tr>

<?php
	while($res=$data->fetch(PDO::FETCH_BOTH)){
		echo '<tr>';
		echo '<td align=center>'.$res['Names'].'</td>';
		echo '<td align=center>'.$res['Logins'].'</td>';
		echo '<td align=center>'.$res['Pass'].'</td>';
		echo '<td align=center>'.$res['Tels'].'</td>';
		echo '<td align=center><a style="color:red;" href="/Admin/Del_User/'.$res['id'].'">X</a></td>';
		echo '</tr>';
	}
?>
</table>

</div>