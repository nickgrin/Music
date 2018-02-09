<?php

class Controller_MainPage extends Controller
{

	function action_index($id)
	{	
	$this->view->generate('index.php', 'Main_Page.php',$id);	
	}

	function action_Tovar($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}

	function action_History()
	{	
	$this->view->generate('Histor.php', 'Main_Page.php');
	}

	function action_Tex()
	{	
	$this->view->generate('Tex.php', 'Main_Page.php');
	}

	function action_Sxema()
	{	
	$this->view->generate('Sxema.php', 'Main_Page.php');
	}

	function action_Kontakt()
	{	
	$this->view->generate('Kont.php', 'Main_Page.php');
	}

	function action_Info($id)
	{	
	$this->view->generate('Tovar_Info.php', 'Main_Page.php',$id);
	}

	function action_Search($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}





	function action_Transl($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}

	function action_Zvyk($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}

	function action_Svet($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}

	function action_Micro($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}

	function action_Kabel($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}

	function action_Laser($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}

	function action_Stoik($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}

	function action_Proekt($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}

	function action_Effect($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}

	function action_B_Y($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}

	function action_MuzInstrym($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}

	function action_Old($id)
	{	
	$this->view->generate('Tovar.php', 'Main_Page.php',$id);
	}

	function action_Korz($id)
	{	
	if (isset($_SESSION['Login'])) {
		$this->view->generate('/User/Korz.php', 'Main_Page.php',$id);
	}
	else{
		header("Location:/Info");
	}	
	
	}


	function action_Map()
	{	
	$this->view->generate('Map.php', 'Main_Page.php');
	}




}



