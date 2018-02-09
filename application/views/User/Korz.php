<div class="width1024">
<br>
<h2>Корзина</h2>

<form action="/User/Add_Zakaz" method="POST" onsubmit="return ValidKorz();">

<br><b>Телефон</b><br>
<?php
echo '<input type="text" id="Tovar_Tel" name="Tovar_Tel" value="'.$_SESSION['Tel'].'" size="40"><br>';
?>


<br><b>Способо оплаты</b><br>
<select style="font-size:18px;" id="Tovar_Type" name="Tovar_Type">
	<option value="0">Наличный расчёт</option>
	<option value="1">Безналичный расчёт</option>

</select><br><br>

<table>
    <tr>
      <th>Индекс</th>
      <th>Наименование</th>
      <th>Изображение</th>
      <th>Цена</th>
      <th>Количество</th>
      <th>Производитель</th>
      <th>Управление</th>
    </tr>
<?php
	while($res=$data->fetch(PDO::FETCH_BOTH)){

	echo '<tr name="s'.$res['id'].'" id="s'.$res['id'].'">';
	echo '<td style="text-align:center;"><input disabled type="text" name="id'.$res['id'].'" id="id'.$res['id'].'" value="'.$res['id'].'"></td>';
	echo '<td style="text-align:center;"><a style="color:black;text-decoration:underline;" href="/MainPage/Info/'.$res['id'].'">'.$res['Nazv'].'</td>';
	echo '<td style="text-align:center;"><img height="55px;" src="'.$res['Photo1'].'"></td>';
	echo '<td style="text-align:center;"><span name="c'.$res['id'].'" id="c'.$res['id'].'">'.$res['Coin'].'<span></td>';
	echo '<td style="text-align:center;"><input onblur="Korzs()" onkeyup="return proverka(this);" type="text" name="k'.$res['id'].'" id="k'.$res['id'].'" value="1"></td>';
	echo '<td style="text-align:center;">'.$res['Proizv'].'</td>';

	echo '<td style="text-align:center;"> <input onchange="Korzs()" checked type="checkbox" name="ch'.$res['id'].'" id="ch'.$res['id'].'"> </td>';

	echo '</tr>';
	}
?>
</table>

<br><span id="Last" name="Last" class="ccn" style="font-weight:bold;">Сумма: 0 руб.</span><br><br>

<input onclick="Clear();" class="isss" type="submit" value="Отправить"><br><br><br>
<a onclick="Clear();" href="/MainPage/Korz" class="isss2">Очистить</a>

</div>

</form>

<script type="text/javascript">
Korzs();
</script>