<div class="width1024">

<div class="title">
    <span>
        Каталог товаров
    </span>
</div>

<ul class="Mens_Tovar">

<?php
while($res=$data->fetch(PDO::FETCH_BOTH)){
echo '<li>';
echo '<img src="'.$res['Photo1'].'" height="160px;" width="170px;">';
echo '<div>';
echo '<a class="ss1" href="/MainPage/Info/'.$res['id'].'">'.mb_substr($res['Nazv'], 0, 25, 'UTF-8').'...'.'</a><br>';
echo '<p>'.$res['Coin'].' р.</p><br>';

if (isset($_SESSION['Login']) && $_SESSION['Login']!="Admin") {
echo '<span  onclick="TestIsset(this.id)" id="'.$res['id']. '" class="ss2">В корзину</span>';
}
else{
echo '<span id="'.$res['id']. '" class="ss2">В корзину</span>';
}


echo '<a class="ss3" href="/MainPage/Info/'.$res['id'].'">Подробнее</a>';
echo '</div>';
echo '</li>';
}
?>

</ul>

<br><br><br>
</div>