<?php
require_once 'application/config/Db.php';
class model_MainPage extends Model
{

	function action_index()
	{	
		$db=Db::getConnection();
		$str="Select *from Galer";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Tovar()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_History()
	{	
	
	}

	function action_Tex()
	{	
	
	}

	function action_Sxema()
	{	
	
	}

	function action_Kontakt()
	{	

	}

	function action_Info($id)
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar where id=".$id;
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Search()
	{	
		$db=Db::getConnection();
		$str='Select *from Tovar where Nazv="'.$_POST['Nazvs'].'"';
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}


	function action_Transl()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar where type=0";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Zvyk()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar where type=1";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Svet()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar where type=2";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

		function action_Micro()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar where type=3";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Kabel()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar where type=4";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Laser()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar where type=5";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

		function action_Stoik()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar where type=6";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Proekt()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar where type=7";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Effect()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar where type=8";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_B_Y()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar where type=9";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_MuzInstrym()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar where type=10";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Old()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar where type=11";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}


	function action_korz()
	{	
		$db=Db::getConnection();
		$str="Select *from Tovar";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Map()
	{	
	
	}






	}




