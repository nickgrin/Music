<?php

class Controller_Admin extends Controller
{

	function action_index()
	{	

	}


	function action_Spis($id)
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Spis.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Del_user($num)
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/Spis");
		}	
		else{
			header("Location:/Info");
		}
	}



	function action_News($id)
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/News.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Del_News($num)
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/News");
		}	
		else{
			header("Location:/Info");
		}
	}


		function action_Add_News()
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Add_News.php', 'Main_Page.php');	
		}	
		else{
			header("Location:/Info");
		}
	
	}


		function action_Add_News_Load()
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/News");	
		}	
		else{
			header("Location:/Info");
		}
	
	}



	function action_Corr_News($id)
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Cor_News.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Add_News_Update()
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/News");	
		}	
		else{
			header("Location:/Info");
		}
	
	}




























	function action_Tovar($id)
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Tovar.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Del_Tovar($num)
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/Tovar");
		}	
		else{
			header("Location:/Info");
		}
	}


		function action_Add_Tovar()
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Add_Tovar.php', 'Main_Page.php');	
		}	
		else{
			header("Location:/Info");
		}
	
	}


		function action_Add_Tovar_Load()
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/Tovar");	
		}	
		else{
			header("Location:/Info");
		}
	
	}



	function action_Corr_Tovar($id)
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Cor_Tovar.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Add_Tovar_Update()
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/Tovar");	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Buy($id)
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Buy.php', 'Main_Page.php',$id);		
		}	
		else{
			header("Location:/Info");
		}
	
	}









	function action_Del_Buy()
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/Buy");
		}	
		else{
			header("Location:/Info");
		}
	}


	function action_Yes()
	{	
		if ($_SESSION["Login"]=="Admin") {
			header("Location:/Admin/Buy");	
		}
	}


	function action_Noy()
	{	
		if ($_SESSION["Login"]=="Admin") {
			header("Location:/Admin/Buy");	
		}
	}







}

