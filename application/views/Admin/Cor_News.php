<div class="width1024">

<div class="title">
    <span>
        Зона администратора
    </span>
</div>

<h2>Редактирование</h2>

<?php
	while($res=$data->fetch(PDO::FETCH_BOTH)){
		echo '<form action="/Admin/Add_News_Update/'.$res['id'].'" method="POST"  enctype="multipart/form-data"  onsubmit="return ValidBlogCorrect();">';
		echo '<br><b>Заголовок</b><br>';
		echo '<input type="text" id="News_zagol" name="News_zagol" value="'.$res['Nazv'].'" size="40"><br><br>';
		echo '<b>Текст новости</b><br>';
		echo '<textarea style="border:1px solid silver;" id="News_Text"  name="News_Text" rows="10" cols="65">'.$res['Texts'].'</textarea><br><br>';
	}
?>
<input type="file" name="filename1" accept="image/jpeg,image/png,image/gif"><br><br>
<input style="padding: 5px 10px;cursor:pointer;border:1px solid silver;" type="submit" value="Загрузить"></form>

</div>
