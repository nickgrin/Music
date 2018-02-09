<div class="width1024">

<div class="title">
    <span>
        Учётная запись
    </span>
</div>


<div class="Block_avtoriz">
<h2>АВТОРИЗАЦИЯ</h2>

<form action="/Info/Log_info" method="POST"   onsubmit="return ValidAvtoriz();">
		<div>
		<br><br><b>Логин</b><br>
		<input type="text" id="log_avtoriz" name="log_avtoriz"  size="50"><br><br>
		<b>Пароль</b><br>
		<input type="text" id="pas_avtoriz" name="pas_avtoriz"  size="50"><br><br><br>

		<div class="gr">
		<input class="inp" type="submit" value="Авторизация">
		</div>

		
		</div>
</form>
</div>



<div class="Block_Register">
<h2>РЕГИСТРАЦИЯ</h2>
	<form action="/Info/Reg_info" method="POST"  onsubmit="return ValidRegister();">

		<div>
		<br><br><b>Имя</b><br>
		<input type="text" id="Name_reg" name="Name_reg"  size="50"><br><br>
		<b>Логин</b><br>
		<input type="text" id="log_reg" name="log_reg"  size="50"><br><br>
		<b>Пароль</b><br>
		<input type="text" id="pas_reg" name="pas_reg"  size="50"><br><br>
		<b>Телефон</b><br>
		<input type="text" id="tel_reg" name="tel_reg"  size="50"><br><br><br><br>

		<div class="gr">
		<input class="inp" type="submit" value="Регистрация">
		</div>

		</div>
</form>
</div>


</div>