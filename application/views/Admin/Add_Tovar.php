<div class="width1024">

<div class="title">
    <span>
        Зона администратора
    </span>
</div>

<h2>Добавить товар</h2>

<div class="Avtoriz_Content">

<form action="/Admin/Add_Tovar_Load" method="POST"  enctype="multipart/form-data" onsubmit="return ValidAddTovar();">

<br><b>Название</b><br>
<input type="text" id="Tovar_Nazv" name="Tovar_Nazv" size="40"><br><br>

<br><b>Цена</b><br>
<input type="text" id="Tovar_Coin" name="Tovar_Coin" size="40"><br><br>

<br><b>Производитель</b><br>
<input type="text" id="Tovar_Proizv" name="Tovar_Proizv" size="40"><br><br>

<br><b>Гарантия</b><br>
<input type="text" id="Tovar_Garant" name="Tovar_Garant" size="40"><br><br>

<br><b>Кол-во цветов</b><br>
<input type="text" id="Tovar_Color" name="Tovar_Color" size="40"><br><br>

<br><b>Вес</b><br>
<input type="text" id="Tovar_Ves" name="Tovar_Ves" size="40"><br>


<br><b>Тип товара</b><br>
<select style="font-size:18px;" id="Tovar_Type" name="Tovar_Type">
	<option value="0">Трансляционное оборудование</option>
	<option value="1">Звуковое оборудование</option>
	<option value="2">Световое оборудование</option>
	<option value="3">Микрофоны</option>
	<option value="4">Кабельная продукция</option>
	<option value="5">Лазерный эффект</option>
	<option value="6">Стойки и фермы</option>
	<option value="7">Проекторы и экран</option>
	<option value="8">Генераторы эффектов</option>
	<option value="9">Товары Б/У</option>
	<option value="10">Музылькальные инструменты</option>
	<option value="11">Старый инструмент</option>
</select><br><br>

<b>Описание товара</b><br>
<textarea style="border:1px solid silver;" id="Tovar_Text" name="Tovar_Text" rows="10" cols="65"></textarea><br><br>
<input type="file" name="filename1"><br><br>
<input style="padding: 5px 10px;cursor:pointer;border:1px solid silver;" type="submit" value="Загрузить" accept="image/jpeg,image/png,image/gif" ></form>

</div>


</div>
<br><br><br><br>

