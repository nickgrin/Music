<div class="width1024">

<div class="title">
    <span>
        Зона пользователя
    </span>
</div>

<h2>Заявки пользователей</h2>

<table>
    <tr>
      <th>Телефон</th>
      <th>Тип оплаты</th>
      <th>Заказ</th>
      <th>Дата</th>
      <th>Состояние</th>
      <th>Управление</th>
    </tr>
<?php
	while($res=$data->fetch(PDO::FETCH_BOTH)){
	echo '<tr>';
	echo '<td style="text-align:center;">'.$res['Tels'].'</td>';
	if ($res['Dostav']==0) {echo '<td style="text-align:center;">Наличный расчёт</td>';}
	if ($res['Dostav']==1) {echo '<td style="text-align:center;">Безналичный расчёт</td>';}
	echo '<td>'.$res['Texts'].'</td>';
	echo '<td style="text-align:center;">'.$res['Datas'].'</td>';

	if ($res['Type']==0) {echo '<td style="text-align:center;">В ожидании</td>';}
	if ($res['Type']==1) {echo '<td style="text-align:center;">Принята</td>';}
	if ($res['Type']==2) {echo '<td style="text-align:center;">Отказано</td>';}

	echo '<td style="text-align:center;">  <a style="color:darkorange;" href="/User/Del_Buy/'.$res['id'].'">Del</a></td>';
	echo '</tr>';
	}
?>
  

</table>

</div>

