<div class="width1024">

<div class="title">
    <span>
        Зона пользователя
    </span>
</div>

<h2>Личный кабинет</h2>

<div class="Avtoriz_Content">

<?php
while($res=$data->fetch(PDO::FETCH_BOTH)){

echo '<form action="/User/Update/'.$res['id'].'" method="POST"  enctype="multipart/form-data" onsubmit="return ValidUser();">';
echo '<br><b>Логин</b><br>';
echo '<input disabled type="text" id="Lg" name="Lg" size="40" value="'.$res['Logins'].'"><br><br>';

echo '<br><b>Имя</b><br>';
echo '<input type="text" id="Nm" name="Nm" size="40" value="'.$res['Names'].'"><br><br>';

echo '<br><b>Телефон</b><br>';
echo '<input type="text" id="Tl" name="Tl" size="40" value="'.$res['Tels'].'"><br><br>';

echo '<br><b>Пароль</b><br>';
echo '<input type="text" id="Ps" name="Ps" size="40" value="'.$res['Pass'].'"><br><br>';
}
?>

<input style="padding: 5px 10px;cursor:pointer;border:1px solid silver;" type="submit" value="Обновить" accept="image/jpeg,image/png,image/gif" ></form>

</div>

</div>
<br><br><br><br>

