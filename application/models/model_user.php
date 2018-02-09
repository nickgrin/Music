<?php
require_once 'application/config/Db.php';
class model_User extends Model
{

	function action_index()
	{	

	}

	function action_ls()
	{	
		if (isset($_SESSION["Login"])) {
			$db=Db::getConnection();
			$str='Select *from Login where Logins="'.$_SESSION['Login'].'"';
			$result=$db->prepare($str);
			$result->execute();
			return $result;
		}
	}


	function action_Update($id)
	{	
	if (isset($_SESSION['Login'])) {
		$db=Db::getConnection();	
		$a2=$_POST['Ps'];
		$a3=$_POST['Nm'];
		$a4=$_POST['Tl'];

			$_SESSION['Pass']=$a2;
			$_SESSION['Tel']=$a4;
			$_SESSION['Names']=$a3;
		
		$str1='UPDATE `Login` SET `Pass`="'.$a2.'", `Names`="'.$a3.'", `Tels`="'.$a4.'" WHERE id='.$id;
		$result=$db->query($str1);
	}
	}


	function action_Buy()
	{	
		if (isset($_SESSION["Login"])) {
			$db=Db::getConnection();
			$str='Select *from Buy where Login="'.$_SESSION['Login'].'"';
			$result=$db->prepare($str);
			$result->execute();
			return $result;	
		}
	}




	function action_Del_Buy($num)
	{	
		if (isset($_SESSION['Login'])) {
			$db=Db::getConnection();
			$str="DELETE FROM `Buy` WHERE id='".$num."'";
			$result=$db->query($str);
		}
	}




	function action_Add_Zakaz()
	{	

	if (isset($_SESSION['Login'])) {

	$a1=$_POST['Tovar_Tel'];
	$a2=$_POST['Tovar_Type'];

		$db=Db::getConnection();	

			for ($i=0; $i<500; $i++) {
			$Name_Check_Box="ch".$i;
			$Kols="k".$i;

			if (isset($_POST[$Name_Check_Box])) {

			$str="Select *from Tovar where id=".$i;
			$result=$db->prepare($str);
			$result->execute();
			$res=$result->fetch(PDO::FETCH_BOTH);

			$str_buy=$str_buy."Название: ".$res['Nazv']." - Кол-во: ".$_POST[$Kols]." - Цена: ".$res['Coin']." р. | ";
			}
		}


		if (!empty($str_buy)) {
			$str1="INSERT INTO `Buy`(`Tels`, `Dostav`, `Texts`,  `Login`)
			VALUES (";
			$str2="'".$a1."','".$a2."','".$str_buy."','".$_SESSION['Login']."')";
			$str3=$str1.$str2;
			$result=$db->query($str3);
		}


	
	}



	}



	}




