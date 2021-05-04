<?php
namespace DankiCode\Controllers;

class HomeController{

	public function index(){
		if (isset($_SESSION['login'])) {
			\DankiCode\Views\MainView::render('home');
			
		}else{

			\DankiCode\Views\MainView::render('login');


		}
	}
}
?>