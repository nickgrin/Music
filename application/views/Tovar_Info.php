<div class="width1024">

<div class="title">
    <span>
        Описание товара
    </span>
</div>

<?php
while($res=$data->fetch(PDO::FETCH_BOTH)){
echo '<h2>'.$res['Nazv'].'</h2><br>';
echo '<div class="Tov_Photo">';
echo '<ul>';
if ($res['Photo1']!=""){echo '<li><img onclick="Fun(1)" id="ss1" name="ss1" src="'.$res['Photo1'].'" height="70px;" width="70px;"></li>';}
if ($res['Photo2']!=""){echo '<li><img onclick="Fun(2)" id="ss2" name="ss2" src="'.$res['Photo2'].'" height="70px;" width="70px;"></li>';}
if ($res['Photo3']!=""){echo '<li><img onclick="Fun(3)" id="ss3" name="ss3" src="'.$res['Photo3'].'" height="70px;" width="70px;"></li>';}

echo '</ul>';
echo '<img id="Main_Photo" name="Main_Photo" class="sss1" src="'.$res['Photo1'].'" height="281px;" width="320px;">';
echo '</div>';
echo '<div class="Tov_Infos">';
echo '<span>Код товара: <b style="font-size:16px;">00000'.$res['id'].'</b></span><br><br>';
echo '<b>'.$res['Coin'].' р.</b>';
echo '<ul class="Toch_Info">';
echo '<li>Производитель: '.$res['Proizv'].'</li>';
echo '<li>Гарантия: '.$res['Garant'].' месяцев</li>';
echo '<li>Кол-во цветов: '.$res['Color'].' цветов</li>';
echo '<li>Вес: '.$res['Ves'].' г.</li>';
echo '</ul><br><br><br><br><br><br><br><br><br><br><br><br>';
if (isset($_SESSION['Login']) && $_SESSION['Login']!="Admin") {
echo '<a  onclick="TestIsset(this.id)" id="'.$res['id']. '" class="ss2">В корзину</a>';
}
else{
echo '<a id="'.$res['id']. '" class="ss2">В корзину</a>';
}
echo '</div><br><br>';
echo '<h3 style="text-align:left;text-indent: 35px;">Описание</h3>';
echo '<p class="p_text">'.$res['Texts'].'</p>';
echo '<br><br><br>';
echo '</div>';
}
?>

