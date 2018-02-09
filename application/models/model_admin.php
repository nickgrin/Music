<?php
require_once 'application/config/Db.php';
class model_Admin extends Model
{

	function action_index()
	{	

	}


	function action_Spis()
	{	
		if ($_SESSION["Login"]=="Admin") {
			$db=Db::getConnection();
			$str="Select *from Login";
			$result=$db->prepare($str);
			$result->execute();
			return $result;
		}
	
	}


	function action_Del_user($num)
	{	
		if ($_SESSION["Login"]=="Admin") {
			$db=Db::getConnection();
			$str="DELETE FROM `Login` WHERE id='".$num."'";
			$result=$db->query($str);
		}
	}





	function action_News()
	{	
		if ($_SESSION["Login"]=="Admin") {
			$db=Db::getConnection();
			$str="Select *from News";
			$result=$db->prepare($str);
			$result->execute();
			return $result;
		}
	
	}


	function action_Del_News($num)
	{	
		if ($_SESSION["Login"]=="Admin") {
			$db=Db::getConnection();
			$str="DELETE FROM `News` WHERE id='".$num."'";
			$result=$db->query($str);
		}
	}




	function action_Add_News()
	{	

	
	}


		function action_Add_News_Load(){	
		if ($_SESSION["Login"]=="Admin") {
		$db=Db::getConnection();	
		$a1=$_POST['News_zagol'];
		$a2=$_POST['News_Text'];

	$uploaddir = './photo/News/';
	$uploaddir2 = '/photo/News/';
	$uploadfile = $uploaddir . basename($_FILES['filename1']['name']);
	$uploadfile2 = $uploaddir2 . basename($_FILES['filename1']['name']);
		
		if (!empty($_FILES['filename1']['name'])) {
		copy($_FILES['filename1']['tmp_name'], $uploadfile);
		}
		$str1="INSERT INTO `News`(`Nazv`, `Texts`, `Photos`)
		VALUES (";
		$str2="'".$a1."','".$a2."','".$uploadfile2."')";
		$str3=$str1.$str2;
		$result=$db->query($str3);
	}}


	function action_Corr_News($id)
	{	
		if ($_SESSION["Login"]=="Admin") {
			$db=Db::getConnection();
			$str="Select *from News where id=".$id;
			$result=$db->prepare($str);
			$result->execute();
			return $result;
		}
	
	}


	function action_Add_News_Update($id)
	{
	if ($_SESSION["Login"]=="Admin") {
		$db=Db::getConnection();	
		$a1=$_POST['News_zagol'];
		$a2=$_POST['News_Text'];


		
		if (!empty($_FILES['filename1']['name'])) {
		$uploaddir = './photo/News/';
		$uploaddir2 = '/photo/News/';
		$uploadfile = $uploaddir . basename($_FILES['filename1']['name']);
		$uploadfile2 = $uploaddir2 . basename($_FILES['filename1']['name']);
		copy($_FILES['filename1']['tmp_name'], $uploadfile);
		$str1='UPDATE `News` SET `Photos`="'.$uploadfile2.'" WHERE id='.$id;
		$result=$db->query($str1);
		}
		$str1='UPDATE `News` SET `Nazv`="'.$a1.'", `Texts`="'.$a2.'" WHERE id='.$id;
		$result=$db->query($str1);
	}
	}
































	function action_Tovar()
	{	
		if ($_SESSION["Login"]=="Admin") {
			$db=Db::getConnection();
			$str="Select *from Tovar";
			$result=$db->prepare($str);
			$result->execute();
			return $result;
		}
	
	}


	function action_Del_Tovar($num)
	{	
		if ($_SESSION["Login"]=="Admin") {
			$db=Db::getConnection();
			$str="DELETE FROM `Tovar` WHERE id='".$num."'";
			$result=$db->query($str);
		}
	}




	function action_Add_Tovar()
	{	

	
	}


		function action_Add_Tovar_Load(){	
		if ($_SESSION["Login"]=="Admin") {
		$db=Db::getConnection();	
		$a1=$_POST['Tovar_Nazv'];
		$a2=$_POST['Tovar_Coin'];
		$a3=$_POST['Tovar_Proizv'];
		$a4=$_POST['Tovar_Garant'];
		$a5=$_POST['Tovar_Color'];
		$a6=$_POST['Tovar_Ves'];
		$a7=$_POST['Tovar_Text'];
		$a8=$_POST['Tovar_Type'];	

	$uploaddir = './photo/Tovar/';
	$uploaddir2 = '/photo/Tovar/';
	$uploadfile = $uploaddir . basename($_FILES['filename1']['name']);
	$uploadfile2 = $uploaddir2 . basename($_FILES['filename1']['name']);
		
		if (!empty($_FILES['filename1']['name'])) {
		copy($_FILES['filename1']['tmp_name'], $uploadfile);
		}
		$str1="INSERT INTO `Tovar`(`Nazv`, `Coin`, `Proizv`, `Garant`, `Color`, `Ves`, `Photo1`, `Texts`, `Type`)
		VALUES (";
		$str2="'".$a1."','".$a2."','".$a3."','".$a4."','".$a5."','".$a6."','".$uploadfile2."','".$a7."','".$a8."')";
		$str3=$str1.$str2;
		$result=$db->query($str3);
	}}





	function action_Corr_Tovar($id)
	{	
		if ($_SESSION["Login"]=="Admin") {
			$db=Db::getConnection();
			$str="Select *from Tovar where id=".$id;
			$result=$db->prepare($str);
			$result->execute();
			return $result;
		}
	
	}



	function action_Add_Tovar_Update($id)
	{
	if ($_SESSION["Login"]=="Admin") {
		$db=Db::getConnection();	
		$a1=$_POST['Tovar_Nazv'];
		$a2=$_POST['Tovar_Coin'];
		$a3=$_POST['Tovar_Proizv'];
		$a4=$_POST['Tovar_Garant'];
		$a5=$_POST['Tovar_Color'];
		$a6=$_POST['Tovar_Ves'];
		$a7=$_POST['Tovar_Text'];
		$a8=$_POST['Tovar_Type'];


		
		if (!empty($_FILES['filename1']['name'])) {
		$uploaddir = './photo/Tovar/';
		$uploaddir2 = '/photo/Tovar/';
		$uploadfile = $uploaddir . basename($_FILES['filename1']['name']);
		$uploadfile2 = $uploaddir2 . basename($_FILES['filename1']['name']);
		copy($_FILES['filename1']['tmp_name'], $uploadfile);
		$str1='UPDATE `Tovar` SET `Photo1`="'.$uploadfile2.'" WHERE id='.$id;
		$result=$db->query($str1);
		}
		
		if (!empty($_FILES['filename2']['name'])) {
		$uploaddir = './photo/Tovar/';
		$uploaddir2 = '/photo/Tovar/';
		$uploadfile = $uploaddir . basename($_FILES['filename2']['name']);
		$uploadfile2 = $uploaddir2 . basename($_FILES['filename2']['name']);
		copy($_FILES['filename2']['tmp_name'], $uploadfile);
		$str1='UPDATE `Tovar` SET `Photo2`="'.$uploadfile2.'" WHERE id='.$id;
		$result=$db->query($str1);
		}

		if (!empty($_FILES['filename3']['name'])) {
		$uploaddir = './photo/Tovar/';
		$uploaddir2 = '/photo/Tovar/';
		$uploadfile = $uploaddir . basename($_FILES['filename3']['name']);
		$uploadfile2 = $uploaddir2 . basename($_FILES['filename3']['name']);
		copy($_FILES['filename3']['tmp_name'], $uploadfile);
		$str1='UPDATE `Tovar` SET `Photo3`="'.$uploadfile2.'" WHERE id='.$id;
		$result=$db->query($str1);
		}

		$str1='UPDATE `Tovar` SET `Nazv`="'.$a1.'", `Coin`="'.$a2.'" , `Proizv`="'.$a3.'" , `Garant`="'.$a4.'" , `Color`="'.$a5.'" , `Ves`="'.$a6.'", `Texts`="'.$a7.'" , `Type`="'.$a8.'" WHERE id='.$id;
		$result=$db->query($str1);
	}
	}



	function action_Buy()
	{	
		if ($_SESSION["Login"]=="Admin") {
			$db=Db::getConnection();
			$str="Select *from Buy";
			$result=$db->prepare($str);
			$result->execute();
			return $result;
		}
	
	}




	function action_Del_Buy($num)
	{	
		if ($_SESSION["Login"]=="Admin") {
			$db=Db::getConnection();
			$str="DELETE FROM `Buy` WHERE id='".$num."'";
			$result=$db->query($str);
		}
	}



	function action_Yes($id)
	{	
		if ($_SESSION["Login"]=="Admin") {
	$db=Db::getConnection();	
	$str1='UPDATE `Buy` SET `Type`=1 where id='.$id;
	$result=$db->query($str1);
		}
	}


	function action_Noy($id)
	{	
		if ($_SESSION["Login"]=="Admin") {
	$db=Db::getConnection();	
	$str1='UPDATE `Buy` SET `Type`=2 where id='.$id;
	$result=$db->query($str1);
		}
	}

	}




