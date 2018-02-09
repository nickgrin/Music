<div class="width1024">

<div class="title">
    <span>
        Зона администратора
    </span>
</div>

<h2>Список товаров</h2>

<table>
    <tr>
      <th>Название</th>
      <th>Стоимость</th>
      <th>Производитель</th>
      <th>Фото</th>
      <th>Управление</th>
    </tr>
<?php
	while($res=$data->fetch(PDO::FETCH_BOTH)){
	echo '<tr>';
	echo '<td style="text-align:center;"><a style="font-weight: bold; text-decoration: underline;color:black;" href="/MainPage/Info/'.$res['id'].'">'.$res['Nazv'].'</a></td>';
	echo '<td style="text-align:center;">'.$res['Coin'].' р.</td>';
	echo '<td style="text-align:center;">'.$res['Proizv'].'</td>';
	echo '<td style="text-align:center;width: 150px;"><img style="width:90px;" src="'.$res['Photo1'].'"></td>';
	echo '<td style="text-align:center;">  <a href="/Admin/Del_Tovar/'.$res['id'].'"><img height="25px;width="30px;" src="/photo/del.png"></a>    <a href="/Admin/Corr_Tovar/'.$res['id'].'"><img height="25px;width="30px;" src="/photo/cor.png"></a>                       </td>';
	echo '</tr>';
	}
?>
</table>

</div>

