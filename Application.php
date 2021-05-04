<?php
namespace DankiCode;

class Application
{
	private $controller; 

	private function setApp(){

		$loadName = 'DankiCode\Controllers\\'; 
		$url = explode('/',@$_GET['url']); 

		if ($url[0] == '') {

			$loadName.='Home';

			
					}else{
						$loadName.=ucfirst(strtolower($url[0]));
					}

					$loadName.='Controllers'; 
					if(file_exists($loadName.'.php')){
								$this->controllers = new $loadName(); 

					}else{
						include('Views/pages/404.php'); 
						die();
					}
			

	}
	public function run(){
		$this->setApp();
		$this->controller->index(); 
		echo 'rodando!';
	}
	

}
?>