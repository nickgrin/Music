function Fun (a) {
var p;
if (a=='1') {p=document.getElementById('ss1').src;}
if (a=='2') {p=document.getElementById('ss2').src;}
if (a=='3') {p=document.getElementById('ss3').src;}
$("#Main_Photo").attr("src",p);
}




function TestIsset(a){
if (localStorage.getItem('Ids')==null){
	localStorage.setItem('Ids', ' ');
}

var i;
var old_temp1;     //Корзина до добавления/удаления



old_temp1=localStorage.getItem("Ids");    //Получаем то что сейчас уже присутствует в корзине

var part_temp1=old_temp1.split("~");       //Отделяем части все составляющие массива
	
i=0;
while(i<part_temp1.length){//Ищем: есть ли товар на который мы нажали в корзине
if (a==part_temp1[i]){//Найдено совпадение
alert("Данный товар уже присутствует в корзине");
return;
}
i=i+1;
}

AddKorz(a);
KorzPlus();
}




function AddKorz(a) {
var old_temp1;                            //Корзина до добавления/удаления
var new_temp1;

old_temp1=localStorage.getItem("Ids");   //Получаем то что сейчас уже присутствует в корзине

//Добавляем элемент в корзину
if (old_temp1==" ") {
new_temp1="~"+a+"~";                  //Добавляем в корзину новый элемент(без сохранения)
}
else{
new_temp1=old_temp1+a+"~";            //Добавляем в корзину новый элемент(без сохранения)
}

localStorage.setItem("Ids",new_temp1);    //Добавляем в корзину новый элемент(Сохраняем)
alert("Товар добавлен в корзину");
}






function Show(){
alert(localStorage.getItem('Ids'));
}

function Clear(){
localStorage.clear();
}



function proverka(input){
var value = input.value;
var rep = /[-\.;":'a-zA-Zа-яА-Я]/;
if (rep.test(value)) {
value = value.replace(rep, "");
input.value = value;
}}





function FindInKorz(a){
if (localStorage.getItem('Ids')==null){
	localStorage.setItem('Ids', ' ');
}

var i;
var old_temp1;     //Корзина до добавления/удаления

old_temp1=localStorage.getItem("Ids");    //Получаем то что сейчас уже присутствует в корзине

var part_temp1=old_temp1.split("~");       //Отделяем части все составляющие массива
	
i=0;
while(i<part_temp1.length){//Ищем: есть ли товар на который мы нажали в корзине
if (a==part_temp1[i]){//Найдено совпадение
return 1;
}
i=i+1;
}
return 0;
}




function Korzs(){

var Issets;
var str;
var checks;

var Cena,Kols;

var Sum=0;

for (var i = 0; i <= 1000; i++) {
str="s"+i;
if(document.getElementById(str)){

Issets=FindInKorz(i);  
	if (Issets==0){
		str="#"+str;
		chh="#ch"+i;
		$(str).css("display","none");
		$(chh).prop('checked', false);		
	}
	else{

	checks="#ch"+i;
	if($(checks).prop("checked")) {

		Cena="#c"+i;
		Kols="#k"+i;

		Sum=Sum+Number($(Cena).text())*Number($(Kols).val());
	}

	}
	
}
		
};	

Sum="Сумма: "+Sum+" руб.";

$("#Last").text(Sum);

}




function UpdateKolKorz(){

var ppp=localStorage.getItem('Kolss');

if (ppp==null){
	localStorage.setItem('Kolss', '0');
	ppp=0;
}

$("#mykz").text(ppp);
}

function KorzPlus(){
var ppp=localStorage.getItem('Kolss');

if (ppp==null){
	localStorage.setItem('Kolss', '0');
}

var ppp=Number(localStorage.getItem('Kolss'));
ppp=ppp+1;

localStorage.setItem('Kolss', ppp);	

UpdateKolKorz();
}






















function Empty_Str(id){
var str=document.getElementById(id);	
if (!str.value) {
		document.getElementById(id).focus();
		str.style.border = "2px solid red";
		str.placeholder = 'Поле не должно быть пустым!';
		event.preventDefault();
		return 0;
	}
else{
		str.style.border = "2px solid green";
		return 1;
	}
}





function Emptys_Tel(id,id2){
var str=document.getElementById(id);
var box=$(id2).val().length;

var rep = /[-\.;":'a-zA-Zа-яА-Я]/;
if (rep.test(str.value)) {
		str.value="";
		str.style.border = "2px solid red";
		str.placeholder = 'Наличие букв!';
		event.preventDefault();
		return 0;
}
if (str.value.indexOf("+7")==-1) {
		document.getElementById(id).focus();
		str.value="";
		str.style.border = "2px solid red";
		str.placeholder = 'Не правильный формат!';
		event.preventDefault();
		return 0;
	}
else{
		if (box!="12"){
			document.getElementById(id).focus();
			str.value="";
			str.style.border = "2px solid red";
			str.placeholder = 'Не верное кол-во цифр!';
			event.preventDefault();
			return 0;
		}
		else{
			str.style.border = "2px solid green";
			return 1;
		}
	}
}




function Empty_TextArea(id){
var textarea=document.getElementById(id);
if(textarea.value.length==0){
	document.getElementById(id).focus();
	textarea.style.border = "2px solid red";
	textarea.placeholder = 'Поле не может быть пустым';
		return 0;
	}
else{
	textarea.style.border = "2px solid green";
		return 1;
	}
}











function ValidAvtoriz() {
	if (Empty_Str("log_avtoriz")=="0"){return false;}
	if (Empty_Str("pas_avtoriz")=="0"){return false;}
	return true;
}


function ValidRegister() {
var str="tel_reg";
var str2="#tel_reg";
	if (Empty_Str("Name_reg")=="0"){return false;}
	if (Empty_Str("log_reg")=="0"){return false;}
	if (Empty_Str("pas_reg")=="0"){return false;}
	if (Emptys_Tel(str,str2)=="0"){return false;}
	return true;
}


function ValidStr() {
	if (Empty_Str("Nazvs")=="0"){return false;}
	return true;
}

function ValidAddBlog() {
	if (Empty_Str("News_zagol")=="0"){return false;}
	if (Empty_TextArea("News_Text")=="0"){return false;}
	return true;
}

function ValidAddTovar() {
	if (Empty_Str("Tovar_Nazv")=="0"){return false;}
	if (Empty_Str("Tovar_Coin")=="0"){return false;}
	if (Empty_Str("Tovar_Proizv")=="0"){return false;}
	if (Empty_Str("Tovar_Garant")=="0"){return false;}
	if (Empty_Str("Tovar_Color")=="0"){return false;}
	if (Empty_Str("Tovar_Ves")=="0"){return false;}
	if (Empty_TextArea("Tovar_Text")=="0"){return false;}
	return true;
}



function ValidBlogCorrect() {
	if (Empty_Str("News_zagol")=="0"){return false;}
	if (Empty_TextArea("News_Text")=="0"){return false;}
	return true;
}



function ValidTovarCorrect() {
	if (Empty_Str("Tovar_Nazv")=="0"){return false;}
	if (Empty_Str("Tovar_Coin")=="0"){return false;}
	if (Empty_Str("Tovar_Proizv")=="0"){return false;}
	if (Empty_Str("Tovar_Garant")=="0"){return false;}
	if (Empty_Str("Tovar_Color")=="0"){return false;}
	if (Empty_Str("Tovar_Ves")=="0"){return false;}
	if (Empty_TextArea("Tovar_Text")=="0"){return false;}
	return true;
}

function ValidUser() {
var str="Tl";
var str2="#Tl";	
	if (Empty_Str("Nm")=="0"){return false;}
	if (Emptys_Tel(str,str2)=="0"){return false;}
	if (Empty_Str("Ps")=="0"){return false;}	
	return true;
}

function ValidKorz() {
var str="Tovar_Tel";
var str2="#Tovar_Tel";	
	if (Emptys_Tel(str,str2)=="0"){return false;}
	return true;
}





