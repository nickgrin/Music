<div class="width1024">

<div class="title">
    <span>
        Новости и акции
    </span>
</div>

<?php
while($res=$data->fetch(PDO::FETCH_BOTH)){
echo '<div class="News_PH">';
echo '<img src="'.$res['Photos'].'" height="400px" width="500px;">';
echo '</div><br>';
echo '<span class="dts">'.$res['Datas'].'</span><br><br>';
echo '<h3 style="text-align:left;text-indent: 35px;">'.$res['Nazv'].'</h3>';
echo '<p class="p_text">'.$res['Texts'].'</p>';
}
?>

<br><br><br>
</div>