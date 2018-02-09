<?php

class Controller_Info extends Controller
{


	function action_index()
	{	
		$this->view->generate('Avtoriz.php', 'Main_Page.php');
	}





	function action_Log_info()
	{	
		if (isset($_SESSION['Login'])) {
			if ($_SESSION['Login']=="Admin") {
				header("Location:/Admin/Spis");
			}
			else{
				header("Location:/User/ls");
			}
		}
		else{
			header("Location:/");
		}
	}

	function action_Reg_info()
	{	
		if (isset($_SESSION['Login'])) {
			header("Location:/User/ls");
		}
		else{
			header("Location:/");
		}
	}

	function action_logout()
	{	
		header("Location:/");
	}




}



