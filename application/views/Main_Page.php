<html lang="RUS">
<head>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="/css/Styles.css">

<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">


<script src="/js/jjj.js" type="text/javascript"></script>
<script src="/js/JQ.js"></script>

</head>
<body>

<div id="wrap">  
  <header>

<div class="Top_Menu">
  <div class="width1024">
    <ul>
      <li><a href="/ls">Аккаунт</a></li>
      <li><a href="/Info">Авторизация</a></li>
      <li><a href="/MainPage/Korz">Заказ</a></li>
      <li><a>Перевод</a>
        <ul>
          <li><div id="google_translate_element"></div></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<div class="Shap">
  <div class="width1024">
    
    <div class="Emblem">
      <img src="/photo/emb.png">
      <h2>SevenNoteClub</h2>
    </div>

<form action="/MainPage/Search" method="POST" onsubmit="return ValidStr();">
    <div class="Inpblock">
      <ul>
        <li><input type="text" name="Nazvs" id="Nazvs" placeholder="Полное название..."></li>
        <li><input type="submit" value="Поиск"></li>
      </ul>
    </div>
</form>    

    <div class="Korz">
      <ul>
        <li><img src="/photo/korz.png" height="22px;"></li>
        <li><p>МОЯ КОРЗИНА: <span id="mykz" name="mykz">0</span> товаров</p></li>
      </ul>
    </div>

<script type="text/javascript">
UpdateKolKorz();
</script>

</div>
</div>

<div class="Main_Menu">
  <div class="width1024">

<?php
if (isset($_SESSION['Login'])) {      
  echo '<p class="st1">Добро пожаловать, '.$_SESSION['Names'].'<a style="color:green;" href="/Info/logout"> Выход</a></p>';
}
else{
echo '<p class="st1">Добро пожаловать, Гость</p>';
}
?>

    <ul class="LevelOne">

      <?php
        if ($_SESSION['Login']=="Admin"){
            echo '<li><a style="background-color: Maroon;color:white;">Учётная запись</a>';
            echo '<ul class="mm">';
            echo '<li><a href="/Admin/Spis">Список пользователей</a></li>';
            echo '<li><a href="/Admin/News">Список новостей</a></li>';
            echo '<li><a href="/Admin/Add_News">Добавить новость</a></li>';
            echo '<li><a href="/Admin/Tovar">Список товаров</a></li>';
            echo '<li><a href="/Admin/Add_Tovar">Добавить товар</a></li>';
            echo '<li><a href="/Admin/Buy">Заявки пользователей</a></li>';
            echo '</ul></li>';
        }

          if ($_SESSION['Login']!="Admin" && isset($_SESSION['Login']) ){
            echo '<li><a style="background-color: Maroon;color:white;">Учётная запись</a>';
            echo '<ul class="mm">';
            echo '<li><a href="/User/ls">Личный кабинет</a></li>';
            echo '<li><a href="/User/Buy">Список заявок</a></li>';
            echo '</ul></li>';
        } 
      ?>

      <li><a href="/">Главная</a></li>
      <li><a href="/MainPage/Tovar">Товары</a>
        <ul class="mm">
          <li><a href="/MainPage/Transl">Трансляционное оборудование</a></li>
          <li><a href="/MainPage/Zvyk">Звуковое оборудование</a></li>
          <li><a href="/MainPage/Svet">Световое оборудование</a></li>
          <li><a href="/MainPage/Micro">Микрофоны</a></li>
          <li><a href="/MainPage/Kabel">Кабельная продукция</a></li>
          <li><a href="/MainPage/Laser">Лазерный эффект</a></li>
          <li><a href="/MainPage/Stoik">Стойки, фермы</a></li>
          <li><a href="/MainPage/Proekt">Проекторы и экран</a></li>
          <li><a href="/MainPage/Effect">Генераторы эффектов</a></li>
          <li><a href="/MainPage/B_Y">Товары Б/У</a></li>
          <li><a href="/MainPage/MuzInstrym">Музыкальные инструменты</a></li>
          <li><a href="/MainPage/Old">Старинный инструмент</a></li>
        </ul>
      </li>
      <li><a href="/News">Новости</a></li>
      <li><a>О нас</a>
        <ul class="tt">
          <li><a href="/MainPage/History">История компании</a></li>
          <li><a href="/MainPage/Tex">Техническая поддержка</a></li>
          <li><a href="/MainPage/Sxema">Схема проезда</a></li>
          <li><a href="/MainPage/Map">Карта сайта</a></li>          
        </ul>
      </li>

      <li><a href="/MainPage/Kontakt">Контакты</a></li>
    </ul>
  </div>  
</div>



  </header>


<div class="main">

<?php
  include 'application/views/'.$content_view;
?><br><br>

</div>

</div>






<footer class="Footers">
  <div class="width1024">
      <p>Севастополь 2017</p>
  </div>



</footer>







</body>

<script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'ru'
  }, 'google_translate_element');
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>  




</html>











