<div class="width1024">

<div class="title">
    <span>
        Новости и акции
    </span>
</div>

<ul class="News">

<?php
while($res=$data->fetch(PDO::FETCH_BOTH)){
echo '<li>';
echo '<img src="'.$res['Photos'].'" height="200px;" width="250px;">';
echo '<div>';
echo '<h2>'.$res['Nazv'].'</h2>';
echo '<p>'.mb_substr($res['Texts'], 0, 520, 'UTF-8').'...'.'</p><br><br>';
echo '<a href="/News/Info/'.$res['id'].'">Подробнее</a>';
echo '</div>';
echo '</li>';
}
?>
</ul>

<br><br><br>
</div>