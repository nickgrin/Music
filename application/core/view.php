<?php

class View{

	function generate($content_view, $template_view, $data = null,$nums=null)
	{
		include 'application/views/'.$template_view;	
	}
}