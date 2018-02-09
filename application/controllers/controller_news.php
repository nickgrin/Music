<?php

class Controller_News extends Controller
{

	function action_index($id)
	{	
	$this->view->generate('News.php', 'Main_Page.php',$id);	
	}

	function action_Info($id)
	{	
	$this->view->generate('News_Info.php', 'Main_Page.php',$id);	
	}



}



