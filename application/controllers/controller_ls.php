<?php

class Controller_ls extends Controller
{

	function action_index()
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
			header("Location:/Info");
		}
	}

}



