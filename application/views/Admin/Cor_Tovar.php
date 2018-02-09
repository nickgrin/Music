<div class="width1024">

<div class="title">
    <span>
        Зона администратора
    </span>
</div>

<h2>Редактировать</h2>

<div class="Avtoriz_Content">

<?php
while($res=$data->fetch(PDO::FETCH_BOTH)){

echo '<form action="/Admin/Add_Tovar_Update/'.$res['id'].'" method="POST"  enctype="multipart/form-data" onsubmit="return ValidTovarCorrect();">';
echo '<br><b>Название</b><br>';
echo '<input type="text" id="Tovar_Nazv" name="Tovar_Nazv" size="40" value="'.$res['Nazv'].'"><br><br>';
echo '<br><b>Цена</b><br>';
echo '<input type="text" id="Tovar_Coin" name="Tovar_Coin" size="40" value="'.$res['Coin'].'"><br><br>';
echo '<br><b>Производитель</b><br>';
echo '<input type="text" id="Tovar_Proizv" name="Tovar_Proizv" size="40" value="'.$res['Proizv'].'"><br><br>';
echo '<br><b>Гарантия</b><br>';
echo '<input type="text" id="Tovar_Garant" name="Tovar_Garant" size="40" value="'.$res['Garant'].'"><br><br>';
echo '<br><b>Кол-во цветов</b><br>';
echo '<input type="text" id="Tovar_Color" name="Tovar_Color" size="40" value="'.$res['Color'].'"><br><br>';
echo '<br><b>Вес</b><br>';
echo '<input type="text" id="Tovar_Ves" name="Tovar_Ves" size="40" value="'.$res['Ves'].'"><br>';

echo '<br><b>Тип товара</b><br>';
echo '<select style="font-size:18px;" id="Tovar_Type" name="Tovar_Type">';
if ($res['Type']=='0') { echo '<option value="0" selected>Трансляционное оборудование</option>';}else{ echo '<option value="0">Трансляционное оборудование</option>';}
if ($res['Type']=='1') { echo '<option value="1" selected>Звуковое оборудование</option>';}else{ echo '<option value="1">Звуковое оборудование</option>';}
if ($res['Type']=='2') { echo '<option value="2" selected>Световое оборудование</option>';}else{ echo '<option value="2">Световое оборудование</option>';}
if ($res['Type']=='3') { echo '<option value="3" selected>Микрофоны</option>';}else{ echo '<option value="3">Микрофоны</option>';}
if ($res['Type']=='4') { echo '<option value="4" selected>Кабельная продукция</option>';}else{ echo '<option value="4">Кабельная продукция</option>';}
if ($res['Type']=='5') { echo '<option value="5" selected>Лазерный эффект</option>';}else{ echo '<option value="5">Лазерный эффект</option>';}
if ($res['Type']=='6') { echo '<option value="6" selected>Стойки и фермы</option>';}else{ echo '<option value="6">Стойки и фермы</option>';}
if ($res['Type']=='7') { echo '<option value="7" selected>Проекторы и экран</option>';}else{ echo '<option value="7">Проекторы и экран</option>';}
if ($res['Type']=='8') { echo '<option value="8" selected>Генераторы эффектов</option>';}else{ echo '<option value="8">Генераторы эффектов</option>';}
if ($res['Type']=='9') { echo '<option value="9" selected>Товары Б/У</option>';}else{ echo '<option value="9">Товары Б/У</option>';}
if ($res['Type']=='10') { echo '<option value="10" selected>Музылькальные инструменты</option>';}else{ echo '<option value="10">Музылькальные инструменты</option>';}
if ($res['Type']=='11') { echo '<option value="11" selected>Старый инструмент</option>';}else{ echo '<option value="11">Старый инструмент</option>';}
echo '</select><br><br>';

echo '<b>Описание товара</b><br>';
echo '<textarea style="border:1px solid silver;" id="Tovar_Text" name="Tovar_Text" rows="10" cols="65">'.$res['Texts'].'</textarea><br>';
}
?>

<br><b>Фото 1</b><br>
<input type="file" name="filename1"><br>
<br><b>Фото 2</b><br>
<input type="file" name="filename2"><br>
<br><b>Фото 3</b><br>
<input type="file" name="filename3"><br><br>
<input style="padding: 5px 10px;cursor:pointer;border:1px solid silver;" type="submit" value="Загрузить" accept="image/jpeg,image/png,image/gif" ></form>

</div>

</div>
<br><br><br><br>

