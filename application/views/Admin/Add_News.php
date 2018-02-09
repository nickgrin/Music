<div class="width1024">

<div class="title">
    <span>
        Зона администратора
    </span>
</div>

<h2>Добавить новость</h2>

<div class="Avtoriz_Content">

<form action="/Admin/Add_News_Load" method="POST"  enctype="multipart/form-data" onsubmit="return ValidAddBlog();">
<br><b>Заголовок</b><br>
<input type="text" id="News_zagol" name="News_zagol" size="40"><br><br>
<b>Текст новости</b><br>
<textarea style="border:1px solid silver;" id="News_Text" name="News_Text" rows="10" cols="65"></textarea><br><br>
<input type="file" name="filename1" accept="image/jpeg,image/png,image/gif" ><br><br>
<input style="padding: 5px 10px;cursor:pointer;border:1px solid silver;" type="submit" value="Загрузить"></form>

</div>


</div>


